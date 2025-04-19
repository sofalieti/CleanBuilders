<?php

namespace App\Orchid\Screens;

use App\Models\Domain;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;

class MenuItemScreen extends Screen
{
    public $menu_item;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(MenuItem $menu_item): iterable
    {
        return [
            'menu_item' => $menu_item,
            'menu_items' => MenuItem::with(['parent', 'domains'])
                ->orderBy('sort_order')
                ->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Menu Management';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Add Menu Item')
                ->modal('menuItemModal')
                ->method('createOrUpdate')
                ->icon('plus'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('menu_items', [
                TD::make('title', 'Title')
                    ->sort()
                    ->filter(Input::make()),

                TD::make('link', 'Link')
                    ->filter(Input::make()),

                TD::make('parent.title', 'Parent Menu'),

                TD::make('is_global', 'Global')
                    ->render(fn (MenuItem $item) => $item->is_global ? 'Yes' : 'No'),

                TD::make('domains', 'Domains')
                    ->render(function (MenuItem $item) {
                        if ($item->is_global) {
                            return 'All Domains';
                        }
                        return $item->domains->pluck('name')->implode(', ');
                    }),

                TD::make('sort_order', 'Sort Order')
                    ->sort(),

                TD::make('is_active', 'Active')
                    ->render(fn (MenuItem $item) => $item->is_active ? 'Yes' : 'No'),

                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(fn (MenuItem $item) => 
                        Button::make('Delete')
                            ->method('remove')
                            ->parameters(['menu_item' => $item->id])
                            ->class('btn btn-danger btn-sm')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this menu item?')
                            ->render() .
                        ModalToggle::make('Edit')
                            ->modal('menuItemModal')
                            ->method('createOrUpdate')
                            ->modalTitle('Edit Menu Item')
                            ->asyncParameters([
                                'menu_item' => $item->id
                            ])
                    ),
            ]),

            Layout::modal('menuItemModal', Layout::rows([
                Input::make('menu_item.id')
                    ->type('hidden'),

                Input::make('menu_item.title')
                    ->title('Title')
                    ->placeholder('Enter title')
                    ->required(),
                    
                Input::make('menu_item.link')
                    ->title('Link')
                    ->placeholder('Enter link'),
                    
                Input::make('menu_item.icon')
                    ->title('Icon')
                    ->placeholder('Enter icon class'),

                Input::make('menu_item.sort_order')
                    ->type('number')
                    ->title('Sort Order')
                    ->value(0),

                Relation::make('menu_item.parent_id')
                    ->title('Parent Menu Item')
                    ->fromModel(MenuItem::class, 'title'),

                CheckBox::make('menu_item.is_global')
                    ->title('Global Menu Item')
                    ->sendTrueOrFalse()
                    ->value(false)
                    ->help('If checked, this menu item will be available for all domains'),

                Relation::make('menu_item.domains.')
                    ->title('Domains')
                    ->fromModel(Domain::class, 'name')
                    ->multiple()
                    ->help('Select domains where this menu item should appear (ignored if Global is checked)'),

                CheckBox::make('menu_item.is_active')
                    ->title('Active')
                    ->sendTrueOrFalse()
                    ->value(true),
            ]))
            ->async('asyncGetMenuItem')
            ->title($this->menu_item->exists ? 'Edit Menu Item' : 'Create Menu Item')
            ->applyButton('Save'),
        ];
    }

    /**
     * @param MenuItem $menu_item
     *
     * @return array
     */
    public function asyncGetMenuItem(MenuItem $menu_item): array
    {
        $menu_item->load(['domains', 'parent']);

        return [
            'menu_item' => [
                'id' => $menu_item->id,
                'title' => $menu_item->title,
                'link' => $menu_item->link,
                'icon' => $menu_item->icon,
                'sort_order' => $menu_item->sort_order,
                'parent_id' => $menu_item->parent_id,
                'is_global' => $menu_item->is_global,
                'is_active' => $menu_item->is_active,
                'domains' => $menu_item->domains->pluck('id')->toArray(),
            ],
        ];
    }

    /**
     * @param Request $request
     * @param MenuItem $menu_item
     */
    public function createOrUpdate(Request $request, MenuItem $menu_item): void
    {
        // Преобразуем значения чекбоксов в булевы перед валидацией
        $data = $request->all();
        $data['menu_item']['is_global'] = filter_var($data['menu_item']['is_global'] ?? false, FILTER_VALIDATE_BOOLEAN);
        $data['menu_item']['is_active'] = filter_var($data['menu_item']['is_active'] ?? true, FILTER_VALIDATE_BOOLEAN);
        
        $validated = validator($data, [
            'menu_item.title' => 'required|string|max:255',
            'menu_item.link' => 'nullable|string|max:255',
            'menu_item.icon' => 'nullable|string|max:255',
            'menu_item.sort_order' => 'required|integer',
            'menu_item.parent_id' => 'nullable|exists:menu_items,id',
            'menu_item.is_global' => 'required|boolean',
            'menu_item.is_active' => 'required|boolean',
            'menu_item.domains' => 'array',
        ])->validate();

        $menu_item->fill($validated['menu_item'])->save();

        if (!$menu_item->is_global) {
            $menu_item->domains()->sync($validated['menu_item']['domains'] ?? []);
        } else {
            $menu_item->domains()->detach();
        }

        Toast::info('Menu item was saved successfully!');
    }

    /**
     * @param MenuItem $menu_item
     * @return void
     */
    public function remove(MenuItem $menu_item): void
    {
        try {
            \Log::info('Attempting to delete menu item', ['id' => $menu_item->id]);
            
            // Проверяем, существует ли пункт меню
            if (!$menu_item->exists) {
                \Log::error('Menu item not found', ['id' => $menu_item->id]);
                Toast::error('Пункт меню не найден');
                return;
            }
            
            // Удаляем связи с доменами
            $menu_item->domains()->detach();
            
            // Удаляем сам пункт меню
            $deleted = $menu_item->delete();
            
            if ($deleted) {
                \Log::info('Menu item deleted successfully', ['id' => $menu_item->id]);
                Toast::info('Пункт меню успешно удален');
            } else {
                \Log::error('Failed to delete menu item', ['id' => $menu_item->id]);
                Toast::error('Не удалось удалить пункт меню');
            }
        } catch (\Exception $e) {
            \Log::error('Error deleting menu item', [
                'id' => $menu_item->id,
                'error' => $e->getMessage()
            ]);
            Toast::error('Ошибка при удалении пункта меню: ' . $e->getMessage());
        }
    }
} 
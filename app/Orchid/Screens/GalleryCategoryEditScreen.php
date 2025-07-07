<?php

namespace App\Orchid\Screens;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;

class GalleryCategoryEditScreen extends Screen
{
    /**
     * @var GalleryCategory
     */
    public $category;

    /**
     * Query data.
     */
    public function query(GalleryCategory $category): iterable
    {
        return [
            'category' => $category
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->category->exists ? 'Edit Category' : 'Create Category';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create Category')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->category->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->category->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->category->exists)
                ->confirm('Are you sure you want to delete this category?'),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('category.name')
                    ->title('Name')
                    ->placeholder('Enter category name')
                    ->help('Category name will be displayed in the list')
                    ->required(),

                Input::make('category.slug')
                    ->title('Slug')
                    ->placeholder('Will be generated automatically')
                    ->help('Category URL. Leave empty for automatic generation'),

                TextArea::make('category.description')
                    ->title('Description')
                    ->rows(3)
                    ->placeholder('Brief category description'),

                Input::make('category.sort_order')
                    ->title('Sort Order')
                    ->type('number')
                    ->value(0)
                    ->help('Lower number means higher priority'),

                CheckBox::make('category.is_active')
                    ->title('Active')
                    ->placeholder('Enable category')
                    ->value(1)
                    ->help('Inactive categories will not be displayed on the site'),
            ])
        ];
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $validated = $request->validate([
            'category.name' => 'required|string|max:255',
            'category.slug' => 'nullable|string|max:255|unique:gallery_categories,slug,' . $this->category->id,
            'category.description' => 'nullable|string',
            'category.sort_order' => 'required|integer|min:0',
            'category.is_active' => 'boolean'
        ]);

        $data = $validated['category'];

        // Генерируем слаг, если он не указан
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $this->category->fill($data)->save();

        Alert::info($this->category->wasRecentlyCreated ? 'Category created' : 'Category updated');

        return redirect()->route('platform.gallery.categories');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove()
    {
        $this->category->delete();

        Alert::info('Category deleted');

        return redirect()->route('platform.gallery.categories');
    }
} 
<?php

namespace App\Orchid\Screens;

use App\Models\GalleryCategory;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Illuminate\Http\Request;

class GalleryCategoryListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'categories' => GalleryCategory::withCount('projects')->orderBy('sort_order')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Gallery Categories';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create Category')
                ->icon('plus')
                ->route('platform.gallery.categories.create')
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('categories', [
                TD::make('name', 'Name')
                    ->render(function (GalleryCategory $category) {
                        return Link::make($category->name)
                            ->route('platform.gallery.categories.edit', $category);
                    }),

                TD::make('projects_count', 'Projects')
                    ->render(function (GalleryCategory $category) {
                        return $category->projects_count;
                    }),

                TD::make('sort_order', 'Order')
                    ->render(function (GalleryCategory $category) {
                        return $category->sort_order;
                    }),

                TD::make('is_active', 'Active')
                    ->render(function (GalleryCategory $category) {
                        return $category->is_active ? 'Yes' : 'No';
                    }),

                TD::make('created_at', 'Created')
                    ->render(function (GalleryCategory $category) {
                        return $category->created_at->format('d.m.Y H:i');
                    }),

                TD::make('actions', 'Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (GalleryCategory $category) {
                        return Button::make('Delete')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this category?')
                            ->method('remove')
                            ->parameters([
                                'id' => $category->id,
                            ]);
                    }),
            ])
        ];
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Request $request)
    {
        $category = GalleryCategory::findOrFail($request->get('id'));
        $category->delete();

        Alert::info('Category deleted');

        return redirect()->route('platform.gallery.categories');
    }
} 
<?php

namespace App\Orchid\Screens;

use App\Models\GalleryProject;
use App\Models\GalleryCategory;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Select;
use Illuminate\Http\Request;

class GalleryProjectListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'projects' => GalleryProject::with(['categories', 'attachment'])
                ->withCount('attachment')
                ->orderBy('sort_order')
                ->paginate(),
            'categories' => GalleryCategory::active()->pluck('name', 'id')
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Gallery Projects';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create Project')
                ->icon('plus')
                ->route('platform.gallery.projects.create')
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('projects', [
                TD::make('name', 'Name')
                    ->render(function (GalleryProject $project) {
                        return Link::make($project->name)
                            ->route('platform.gallery.projects.edit', $project);
                    }),

                TD::make('categories', 'Categories')
                    ->render(function (GalleryProject $project) {
                        if ($project->categories->count() > 0) {
                            return $project->categories->pluck('name')->implode(', ');
                        }
                        return 'Not specified';
                    }),

                TD::make('attachment_count', 'Images')
                    ->render(function (GalleryProject $project) {
                        return $project->attachment_count;
                    }),

                TD::make('project_date', 'Project Date')
                    ->render(function (GalleryProject $project) {
                        return $project->formatted_project_date;
                    }),

                TD::make('client_name', 'Client')
                    ->render(function (GalleryProject $project) {
                        return $project->client_name ?: '-';
                    }),

                TD::make('sort_order', 'Order')
                    ->render(function (GalleryProject $project) {
                        return $project->sort_order;
                    }),

                TD::make('is_active', 'Active')
                    ->render(function (GalleryProject $project) {
                        return $project->is_active ? 'Yes' : 'No';
                    }),

                TD::make('created_at', 'Created')
                    ->render(function (GalleryProject $project) {
                        return $project->created_at->format('d.m.Y H:i');
                    }),

                TD::make('actions', 'Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (GalleryProject $project) {
                        return Button::make('Delete')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this project?')
                            ->method('remove')
                            ->parameters([
                                'id' => $project->id,
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
        $project = GalleryProject::findOrFail($request->get('id'));
        $project->delete();

        Alert::info('Project deleted');

        return redirect()->route('platform.gallery.projects');
    }
} 
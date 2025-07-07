<?php

namespace App\Orchid\Screens;

use App\Models\GalleryProject;
use App\Models\GalleryCategory;
use App\Orchid\Layouts\GalleryProjectImageLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;

class GalleryProjectEditScreen extends Screen
{
    /**
     * @var GalleryProject
     */
    public $project;

    /**
     * Query data.
     */
    public function query(GalleryProject $project): iterable
    {
        return [
            'project' => $project->load('categories'),
            'categories' => GalleryCategory::active()->pluck('name', 'id')
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->project->exists ? 'Edit Project' : 'Create Project';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create Project')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->project->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->project->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->project->exists)
                ->confirm('Are you sure you want to delete this project?'),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        $project = $this->project;
        $imageLayouts = [];

        // If project exists and has categories, create image upload fields
        if ($project->exists && $project->categories->count() > 0) {
            foreach ($project->categories as $category) {
                $imageLayouts[] = Layout::rows([
                    Upload::make("project.category_images_{$category->id}")
                        ->title("Images for category: {$category->name}")
                        ->acceptedFiles('image/*')
                        ->maxFiles(20)
                        ->groups("category_{$category->id}")
                        ->help("Upload images for category '{$category->name}'. Maximum 20 images.")
                        ->value($project->attachment()->where('group', "category_{$category->id}")->get())
                ]);
            }
        }

        return array_merge([
            Layout::rows([
                Input::make('project.name')
                    ->title('Project Name')
                    ->placeholder('Enter project name')
                    ->help('Project name will be displayed in the gallery')
                    ->required(),

                Input::make('project.slug')
                    ->title('Slug')
                    ->placeholder('Will be generated automatically')
                    ->help('Project URL. Leave empty for automatic generation'),

                Select::make('project.categories.')
                    ->title('Categories')
                    ->fromModel(GalleryCategory::class, 'name')
                    ->multiple()
                    ->help('Select one or more categories for this project'),

                TextArea::make('project.description')
                    ->title('Brief Description')
                    ->rows(3)
                    ->placeholder('Brief project description'),

                TextArea::make('project.project_details')
                    ->title('Project Details')
                    ->rows(5)
                    ->placeholder('Detailed project description, materials used, etc.'),

                DateTimer::make('project.project_date')
                    ->title('Project Date')
                    ->format('Y-m-d')
                    ->enableTime(false)
                    ->help('Project completion date'),

                Input::make('project.client_name')
                    ->title('Client Name')
                    ->placeholder('Enter client name (optional)'),

                Input::make('project.sort_order')
                    ->title('Sort Order')
                    ->type('number')
                    ->value(0)
                    ->help('Lower number means higher priority'),

                CheckBox::make('project.is_active')
                    ->title('Active')
                    ->placeholder('Enable project')
                    ->value(1)
                    ->checked($this->project->is_active)
                    ->help('Inactive projects will not be displayed on the site'),
            ])
        ], $imageLayouts);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        // Create dynamic validation rules for category images
        $validationRules = [
            'project.name' => 'required|string|max:255',
            'project.slug' => 'nullable|string|max:255|unique:gallery_projects,slug,' . $this->project->id,
            'project.categories' => 'required|array|min:1',
            'project.categories.*' => 'exists:gallery_categories,id',
            'project.description' => 'nullable|string',
            'project.project_details' => 'nullable|string',
            'project.project_date' => 'nullable|date',
            'project.client_name' => 'nullable|string|max:255',
            'project.sort_order' => 'required|integer|min:0',
        ];

        // Add rules for images of each category
        if ($request->has('project.categories')) {
            foreach ($request->input('project.categories', []) as $categoryId) {
                $validationRules["project.category_images_{$categoryId}"] = 'array';
            }
        }

        $validated = $request->validate($validationRules);

        $data = $validated['project'];
        $categories = $data['categories'] ?? [];
        
        // Extract images for categories and remove them from main data
        $categoryImages = [];
        foreach ($categories as $categoryId) {
            $fieldName = "category_images_{$categoryId}";
            if (isset($data[$fieldName])) {
                $categoryImages[$categoryId] = $data[$fieldName];
                unset($data[$fieldName]);
            }
        }
        
        unset($data['categories']); // Remove categories from main data

        // Handle is_active field (checkbox may not send value)
        $data['is_active'] = $request->has('project.is_active') ? 1 : 0;

        // Generate slug if not specified
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $this->project->fill($data)->save();

        // Synchronize categories
        $this->project->categories()->sync($categories);

        // Synchronize images for each category
        foreach ($categoryImages as $categoryId => $images) {
            if (!empty($images)) {
                // First attach images to project
                $this->project->attachment()->syncWithoutDetaching($images);
                
                // Then update groups for each image
                foreach ($images as $imageId) {
                    \Orchid\Attachment\Models\Attachment::where('id', $imageId)
                        ->update(['group' => "category_{$categoryId}"]);
                }
            }
        }

        Alert::info($this->project->wasRecentlyCreated ? 'Project created' : 'Project updated');

        return redirect()->route('platform.gallery.projects');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove()
    {
        $this->project->delete();

        Alert::info('Project deleted');

        return redirect()->route('platform.gallery.projects');
    }
} 
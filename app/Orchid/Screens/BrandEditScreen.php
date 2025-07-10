<?php

namespace App\Orchid\Screens;

use App\Models\Brand;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BrandEditScreen extends Screen
{
    public $brand;

    public function query(Brand $brand): iterable
    {
        $brand->load('categories');
        return [
            'brand' => $brand,
            'categories' => GalleryCategory::pluck('name', 'id'),
        ];
    }

    public function name(): ?string
    {
        return $this->brand->exists ? 'Edit Brand' : 'Create Brand';
    }

    public function commandBar(): iterable
    {
        return [
            Button::make('Create Brand')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->brand->exists),
            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->brand->exists),
            Button::make('Delete')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->brand->exists)
                ->confirm('Are you sure you want to delete this brand?'),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('brand.name')
                    ->title('Name')
                    ->required(),
                TextArea::make('brand.description')
                    ->title('Description'),
                Picture::make('brand.logo')
                    ->title('Logo')
                    ->targetRelativeUrl(),
                Relation::make('brand.categories.')
                    ->fromModel(GalleryCategory::class, 'name')
                    ->multiple()
                    ->title('Gallery Categories'),
            ])
        ];
    }

    public function createOrUpdate(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'brand.name' => 'required|string|max:255',
            'brand.description' => 'nullable|string',
            'brand.logo' => 'nullable|string',
            'brand.categories' => 'array',
        ]);
        $brand->fill($validated['brand']);
        $brand->save();
        $brand->categories()->sync($validated['brand']['categories'] ?? []);
        Alert::info($brand->wasRecentlyCreated ? 'Brand created' : 'Brand updated');
        return redirect()->route('platform.brands');
    }

    public function remove(Brand $brand)
    {
        $brand->delete();
        Alert::info('Brand deleted');
        return redirect()->route('platform.brands');
    }
} 
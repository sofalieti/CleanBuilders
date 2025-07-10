<?php

namespace App\Orchid\Screens;

use App\Models\Material;
use App\Models\Brand;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class MaterialEditScreen extends Screen
{
    public $material;

    public function query(Material $material): iterable
    {
        $material->load('brand');
        return [
            'material' => $material,
            'brands' => Brand::pluck('name', 'id'),
        ];
    }

    public function name(): ?string
    {
        return $this->material->exists ? 'Edit Material' : 'Create Material';
    }

    public function commandBar(): iterable
    {
        return [
            Button::make('Create Material')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->material->exists),
            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->material->exists),
            Button::make('Delete')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->material->exists)
                ->confirm('Are you sure you want to delete this material?'),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('material.name')
                    ->title('Name')
                    ->required(),
                Relation::make('material.brand_id')
                    ->fromModel(Brand::class, 'name')
                    ->title('Brand')
                    ->required(),
                Picture::make('material.photo')
                    ->title('Photo')
                    ->targetRelativeUrl(),
            ])
        ];
    }

    public function createOrUpdate(Request $request, Material $material)
    {
        $validated = $request->validate([
            'material.name' => 'required|string|max:255',
            'material.brand_id' => 'required|exists:brands,id',
            'material.photo' => 'nullable|string',
        ]);
        $material->fill($validated['material']);
        $material->save();
        Alert::info($material->wasRecentlyCreated ? 'Material created' : 'Material updated');
        return redirect()->route('platform.materials');
    }

    public function remove(Material $material)
    {
        $material->delete();
        Alert::info('Material deleted');
        return redirect()->route('platform.materials');
    }
} 
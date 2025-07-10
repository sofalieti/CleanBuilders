<?php

namespace App\Orchid\Screens;

use App\Models\Material;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Illuminate\Http\Request;

class MaterialListScreen extends Screen
{
    public function query(): iterable
    {
        return [
            'materials' => Material::with('brand')->paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Materials';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('Create Material')
                ->icon('plus')
                ->route('platform.materials.create')
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('materials', [
                TD::make('name', 'Name')
                    ->render(function (Material $material) {
                        return Link::make($material->name)
                            ->route('platform.materials.edit', $material);
                    }),
                TD::make('brand', 'Brand')
                    ->render(fn(Material $material) => $material->brand?->name),
                TD::make('photo', 'Photo')
                    ->render(function (Material $material) {
                        return $material->photo ? '<img src="/storage/' . $material->photo . '" width="60"/>' : '';
                    }),
                TD::make('created_at', 'Created')
                    ->render(fn(Material $material) => $material->created_at?->format('d.m.Y H:i')),
                TD::make('actions', 'Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Material $material) {
                        return Button::make('Delete')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this material?')
                            ->method('remove')
                            ->parameters(['id' => $material->id]);
                    }),
            ])->render(),
        ];
    }

    public function remove(Request $request)
    {
        $material = Material::findOrFail($request->get('id'));
        $material->delete();
        Alert::info('Material deleted');
        return redirect()->route('platform.materials');
    }
} 
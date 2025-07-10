<?php

namespace App\Orchid\Screens;

use App\Models\Brand;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Illuminate\Http\Request;

class BrandListScreen extends Screen
{
    public function query(): iterable
    {
        return [
            'brands' => Brand::withCount('materials')->paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Brands';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('Create Brand')
                ->icon('plus')
                ->route('platform.brands.create')
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('brands', [
                TD::make('name', 'Name')
                    ->render(function (Brand $brand) {
                        return Link::make($brand->name)
                            ->route('platform.brands.edit', $brand);
                    }),
                TD::make('logo', 'Logo')
                    ->render(function (Brand $brand) {
                        return $brand->logo ? '<img src="/storage/' . $brand->logo . '" width="60"/>' : '';
                    }),
                TD::make('materials_count', 'Materials')
                    ->render(fn(Brand $brand) => $brand->materials_count),
                TD::make('created_at', 'Created')
                    ->render(fn(Brand $brand) => $brand->created_at?->format('d.m.Y H:i')),
                TD::make('actions', 'Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Brand $brand) {
                        return Button::make('Delete')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this brand?')
                            ->method('remove')
                            ->parameters(['id' => $brand->id]);
                    }),
            ])
        ];
    }

    public function remove(Request $request)
    {
        $brand = Brand::findOrFail($request->get('id'));
        $brand->delete();
        Alert::info('Brand deleted');
        return redirect()->route('platform.brands');
    }
} 
<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\GalleryProject;
use App\Models\GalleryCategory;
use App\Services\MenuService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index(Request $request)
    {
        $menuItems = $this->menuService->getMenuItems();

        return view('home', [
            'menuItems' => $menuItems
        ]);
    }

    public function roofing(Request $request)
    {
        $menuItems = $this->menuService->getMenuItems();

        // Получаем проекты из категории "Roofing"
        $roofingCategory = GalleryCategory::where('name', 'Roofing')->first();
        $roofingProjects = collect();
        
        if ($roofingCategory) {
            $roofingProjects = GalleryProject::whereHas('categories', function ($query) use ($roofingCategory) {
                $query->where('gallery_categories.id', $roofingCategory->id);
            })
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('project_date', 'desc')
            ->take(6) // Ограничиваем количество проектов
            ->get();
        }

        return view('roofing', [
            'menuItems' => $menuItems,
            'roofingProjects' => $roofingProjects,
            'categoryName' => 'Roofing'
        ]);
    }
} 
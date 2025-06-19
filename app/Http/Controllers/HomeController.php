<?php

namespace App\Http\Controllers;

use App\Models\Domain;
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
} 
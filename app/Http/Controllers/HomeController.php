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
        // Получаем домен из запроса
        $host = $request->getHost();
        
        // Ищем домен в базе данных
        $domain = Domain::where('name', $host)->first();

        $menuItems = $this->menuService->getMenuItems($domain);

        return view('welcome', [
            'domain' => $domain,
            'menuItems' => $menuItems
        ]);
    }
} 
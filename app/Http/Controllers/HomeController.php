<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $host = $request->getHost();
        Log::info('Попытка доступа к домену: ' . $host);

        $domain = Domain::where('name', $host)
            ->where('is_active', true)
            ->first();

        if (!$domain) {
            Log::error('Домен не найден или неактивен: ' . $host);
            abort(404, 'Домен не найден');
        }

        Log::info('Домен найден: ' . $domain->name);
        return view('home', [
            'domain' => $domain
        ]);
    }
} 
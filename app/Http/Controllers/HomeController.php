<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Получаем домен из запроса
        $host = $request->getHost();
        
        // Ищем домен в базе данных
        $domain = Domain::where('name', $host)->first();
        
        // Если домен не найден, используем значения по умолчанию
        if (!$domain) {
            $domain = new Domain([
                'name' => $host,
                'title' => 'Infrared Sauna Repair Services',
                'description' => 'Expert repairs, maintenance, and installation for your infrared sauna',
                'phone' => '+1 (555) 123-4567',
                'email' => 'info@saunarepair.com',
                'address' => '123 Sauna Street, New York, NY',
                'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2155710122!2d-73.9878448!3d40.7579747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1635000000000!5m2!1sen!2sus'
            ]);
        }

        return view('welcome', [
            'domain' => $domain
        ]);
    }
} 
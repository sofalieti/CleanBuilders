<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/roofing', [HomeController::class, 'roofing'])->name('roofing');

// Галерея
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/category/{slug}', [GalleryController::class, 'category'])->name('gallery.category');
Route::get('/gallery/project/{slug}', [GalleryController::class, 'project'])->name('gallery.project');
Route::get('/projects', [GalleryController::class, 'allProjects'])->name('projects.index');
Route::get('/projects/{slug}', [GalleryController::class, 'showProject'])->name('projects.show'); 

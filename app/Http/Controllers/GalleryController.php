<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Models\GalleryProject;

class GalleryController extends Controller
{
    /**
     * Display a listing of the gallery.
     */
    public function index()
    {
        $categories = GalleryCategory::active()
            ->with(['activeProjects.attachment'])
            ->orderBy('sort_order')
            ->get();

        $projects = GalleryProject::active()
            ->with(['categories', 'attachment'])
            ->orderBy('sort_order')
            ->get();

        return view('gallery.index', compact('categories', 'projects'));
    }

    /**
     * Display projects by category.
     */
    public function category($slug)
    {
        $category = GalleryCategory::where('slug', $slug)
            ->active()
            ->firstOrFail();

        $projects = GalleryProject::active()
            ->with(['categories', 'attachment'])
            ->whereHas('categories', function ($q) use ($category) {
                $q->where('gallery_categories.id', $category->id);
            })
            ->orderBy('sort_order')
            ->get();

        return view('gallery.category', compact('category', 'projects'));
    }

    /**
     * Display a specific project.
     */
    public function project($slug)
    {
        $project = GalleryProject::where('slug', $slug)
            ->active()
            ->with(['categories', 'attachment'])
            ->firstOrFail();

        return view('gallery.project', compact('project'));
    }
} 
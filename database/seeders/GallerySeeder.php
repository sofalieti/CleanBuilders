<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GalleryCategory;
use App\Models\GalleryProject;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Создаем категории
        $categories = [
            [
                'name' => 'Roofing',
                'slug' => 'roofing',
                'description' => 'Roofing installation and repair projects',
                'sort_order' => 1,
                'is_active' => true
            ],
            [
                'name' => 'Siding',
                'slug' => 'siding',
                'description' => 'Siding installation and facade projects',
                'sort_order' => 2,
                'is_active' => true
            ],
            [
                'name' => 'Commercial',
                'slug' => 'commercial',
                'description' => 'Large commercial construction projects',
                'sort_order' => 3,
                'is_active' => true
            ],
            [
                'name' => 'Residential',
                'slug' => 'residential',
                'description' => 'Private residential construction projects',
                'sort_order' => 4,
                'is_active' => true
            ]
        ];

        foreach ($categories as $categoryData) {
            GalleryCategory::create($categoryData);
        }

        // Создаем проекты
        $roofingCategory = GalleryCategory::where('slug', 'roofing')->first();
        $sidingCategory = GalleryCategory::where('slug', 'siding')->first();
        $commercialCategory = GalleryCategory::where('slug', 'commercial')->first();
        $residentialCategory = GalleryCategory::where('slug', 'residential')->first();

        // Создаем проекты и привязываем их к категориям
        $project1 = GalleryProject::create([
            'name' => 'Private House Roof Replacement',
            'slug' => 'private-house-roof-replacement',
            'description' => 'Complete roof replacement using GAF materials',
            'sort_order' => 1,
            'is_active' => true,
            'project_date' => '2024-08-15',
            'client_name' => 'Johnson Family',
            'project_details' => 'Replacement of old roof with new GAF Timberline HDZ shingles in Pewter Gray. Work included complete replacement of underlayment and installation of new gutter system.'
        ]);
        $project1->categories()->attach([$roofingCategory->id, $residentialCategory->id]);

        $project2 = GalleryProject::create([
            'name' => 'Commercial Roof Repair',
            'slug' => 'commercial-roof-repair',
            'description' => 'Shopping center roof repair',
            'sort_order' => 2,
            'is_active' => true,
            'project_date' => '2024-07-20',
            'client_name' => 'Central Shopping Mall',
            'project_details' => 'Repair of flat roof on shopping center covering 2000 sq.m. using modern waterproofing materials.'
        ]);
        $project2->categories()->attach([$roofingCategory->id, $commercialCategory->id]);

        $project3 = GalleryProject::create([
            'name' => 'Office Building Siding',
            'slug' => 'office-building-siding',
            'description' => 'Modern siding installation using composite materials',
            'sort_order' => 1,
            'is_active' => true,
            'project_date' => '2024-09-10',
            'client_name' => 'Build-Invest LLC',
            'project_details' => 'Siding installation on 5-story office building using aluminum composite panels and modern insulation.'
        ]);
        $project3->categories()->attach([$sidingCategory->id, $commercialCategory->id]);

        $project4 = GalleryProject::create([
            'name' => 'Residential House Reconstruction',
            'slug' => 'residential-house-reconstruction',
            'description' => 'Complete reconstruction of old residential house',
            'sort_order' => 1,
            'is_active' => true,
            'project_date' => '2024-06-05',
            'client_name' => 'Peterson Family',
            'project_details' => 'Complete reconstruction of 1970s house including roof replacement, siding, windows and internal communications.'
        ]);
        $project4->categories()->attach([$roofingCategory->id, $sidingCategory->id, $residentialCategory->id]);

        // Создаем тестовые изображения для каждого проекта по категориям
        $projects = [$project1, $project2, $project3, $project4];
        
        foreach ($projects as $project) {
            foreach ($project->categories as $category) {
                // Создаем по 2 тестовых изображения для каждой категории
                for ($i = 1; $i <= 2; $i++) {
                    $attachment = \Orchid\Attachment\Models\Attachment::create([
                        'name' => "test_image_project_{$project->id}_category_{$category->id}_{$i}",
                        'original_name' => "test_image_project_{$project->id}_category_{$category->id}_{$i}.jpg",
                        'mime' => 'image/jpeg',
                        'extension' => 'jpg',
                        'size' => 1024000,
                        'sort' => $i,
                        'path' => "test_images/project_{$project->id}_category_{$category->id}_{$i}.jpg",
                        'description' => "Тестовое изображение для проекта '{$project->name}', категория '{$category->name}'",
                        'alt' => "Изображение проекта {$project->name}",
                        'hash' => 'test_hash_' . $project->id . '_' . $category->id . '_' . $i,
                        'disk' => 'public',
                        'group' => "category_{$category->id}",
                    ]);
                    
                    $project->attachment()->attach($attachment, ['group' => "category_{$category->id}"]);
                }
            }
        }
    }
} 
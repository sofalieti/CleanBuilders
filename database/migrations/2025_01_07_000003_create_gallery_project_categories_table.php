<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gallery_project_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_project_id')->constrained('gallery_projects')->onDelete('cascade');
            $table->foreignId('gallery_category_id')->constrained('gallery_categories')->onDelete('cascade');
            $table->timestamps();
            
            $table->unique(['gallery_project_id', 'gallery_category_id'], 'gallery_project_category_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_project_categories');
    }
}; 
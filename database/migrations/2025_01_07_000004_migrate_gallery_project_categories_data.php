<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Переносим существующие данные в новую таблицу связей
        DB::statement("
            INSERT INTO gallery_project_categories (gallery_project_id, gallery_category_id, created_at, updated_at)
            SELECT id, gallery_category_id, created_at, updated_at
            FROM gallery_projects
            WHERE gallery_category_id IS NOT NULL
        ");
        
        // Удаляем старый внешний ключ и колонку
        Schema::table('gallery_projects', function (Blueprint $table) {
            $table->dropForeign(['gallery_category_id']);
            $table->dropColumn('gallery_category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Возвращаем колонку внешнего ключа
        Schema::table('gallery_projects', function (Blueprint $table) {
            $table->foreignId('gallery_category_id')->nullable()->constrained('gallery_categories')->onDelete('cascade');
        });
        
        // Переносим данные обратно (берем первую категорию для каждого проекта)
        DB::statement("
            UPDATE gallery_projects 
            SET gallery_category_id = (
                SELECT gallery_category_id 
                FROM gallery_project_categories 
                WHERE gallery_project_categories.gallery_project_id = gallery_projects.id 
                LIMIT 1
            )
        ");
        
        // Удаляем новую таблицу связей
        Schema::dropIfExists('gallery_project_categories');
    }
}; 
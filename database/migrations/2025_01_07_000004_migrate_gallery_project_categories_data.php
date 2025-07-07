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
        if (Schema::hasColumn('gallery_projects', 'gallery_category_id')) {
        DB::statement("
            INSERT INTO gallery_project_categories (gallery_project_id, gallery_category_id, created_at, updated_at)
            SELECT id, gallery_category_id, created_at, updated_at
            FROM gallery_projects
            WHERE gallery_category_id IS NOT NULL
        ");
        }
        
        // Проверяем и удаляем внешний ключ только если он существует
        $foreignKeys = DB::select("
            SELECT CONSTRAINT_NAME 
            FROM information_schema.KEY_COLUMN_USAGE 
            WHERE TABLE_SCHEMA = DATABASE() 
            AND TABLE_NAME = 'gallery_projects' 
            AND COLUMN_NAME = 'gallery_category_id'
            AND REFERENCED_TABLE_NAME IS NOT NULL
        ");
        
        Schema::table('gallery_projects', function (Blueprint $table) use ($foreignKeys) {
            if (!empty($foreignKeys)) {
            $table->dropForeign(['gallery_category_id']);
            }
            
            if (Schema::hasColumn('gallery_projects', 'gallery_category_id')) {
            $table->dropColumn('gallery_category_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Возвращаем колонку внешнего ключа только если её нет
        if (!Schema::hasColumn('gallery_projects', 'gallery_category_id')) {
        Schema::table('gallery_projects', function (Blueprint $table) {
            $table->foreignId('gallery_category_id')->nullable()->constrained('gallery_categories')->onDelete('cascade');
        });
        }
        
        // Переносим данные обратно (берем первую категорию для каждого проекта)
        if (Schema::hasTable('gallery_project_categories')) {
        DB::statement("
            UPDATE gallery_projects 
            SET gallery_category_id = (
                SELECT gallery_category_id 
                FROM gallery_project_categories 
                WHERE gallery_project_categories.gallery_project_id = gallery_projects.id 
                LIMIT 1
            )
        ");
        }
        
        // Удаляем новую таблицу связей
        Schema::dropIfExists('gallery_project_categories');
    }
}; 
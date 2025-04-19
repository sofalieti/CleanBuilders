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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link')->nullable();
            $table->string('icon')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_global')->default(false);
            $table->foreignId('parent_id')->nullable()->constrained('menu_items')->onDelete('cascade');
            $table->foreignId('domain_id')->nullable()->constrained('domains')->onDelete('cascade');
            $table->timestamps();
            
            // Индексы для оптимизации запросов
            $table->index('is_global');
            $table->index('is_active');
            $table->index('sort_order');
            $table->index(['domain_id', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
}; 
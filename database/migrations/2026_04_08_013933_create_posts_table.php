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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 40);
            $table->string('picture');
            $table->string('description');
            $table->text('content');
            $table->boolean('draft_status');
            $table->boolean('approval');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('category', ['Lifestyle', 'Healthy Food Recipes', 'Diet', 'Disease & Prevention', 'Mental Health']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

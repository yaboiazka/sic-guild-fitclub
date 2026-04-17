<?php

namespace Database\Factories;

use App\Enums\Category;
use App\Models\post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Gunakan text(40) supaya tidak melebihi VARCHAR(40)
            'title' => fake()->text(40), 
            
            'picture' => fake()->imageUrl(),
            
            'description' => fake()->sentence(10), 
            
            'content' => fake()->paragraphs(3, true),
            'draft_status' => fake()->boolean(),
            'approval' => fake()->boolean(),
            'user_id' => User::factory(),
            'category' => fake()->randomElement(Category::cases()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
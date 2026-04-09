<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory(10)->create();
        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'Admin'
        ]);
        $allUsers = $users->concat([$testUser]);

        $posts = Post::factory(30)->recycle($users)->create();

        Comment::factory(100)->recycle($posts)->recycle($allUsers)->create();
    }
}
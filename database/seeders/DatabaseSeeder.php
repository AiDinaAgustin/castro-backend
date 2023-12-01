<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Podcast;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Misteri',
            'slug' => 'misteri',
        ]);

        Category::create([
            'name' => 'Supranatural',
            'slug' => 'supranatural',
        ]);

        Category::create([
            'name' => 'Thriller',
            'slug' => 'thriller',
        ]);

        Podcast::factory(1)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Entrées',
                'description' => 'Entrées traditionnels',
            ],
            [
                'name' => 'Plats',
                'description' => 'Plats traditionnels',
            ],
            [
                'name' => 'Desserts',
                'description' => 'Desserts traditionnels',
            ],
            [
                'name' => 'Boissons',
                'description' => 'Boissons traditionnels',
            ],
        ];

        foreach ($categories as $category) {
            Category::factory()->create($category);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Apéritifs',
                'description' => 'Apéritifs traditionnels',
            ],
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
            [
                'name' => 'Petit-déjeuner',
                'description' => 'Petit-déjeuner traditionnels',
            ],
        ];

        foreach ($categories as $category) {
            Category::factory()->create($category);
        }
    }
}

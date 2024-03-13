<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Helppers\JsonRecetteData;
use App\Models\Ingredient;
use App\Models\Product;
use App\Models\Review;
use App\Models\Tutorial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();
        $this->call([
            CategorySeeder::class,
        ]);
        // data is recette.php file in Helpers folder
        $datas = JsonRecetteData::fictiveRecetteData();

        foreach ($datas as $productData) {
            $product = Product::create($productData['product']);

            foreach ($productData['ingredients'] as $ingredientData) {
                $ingredient = new Ingredient($ingredientData);
                $product->ingredients()->save($ingredient);
            }

            foreach ($productData['tutorial'] as $tutorialData) {
                $tutorial = new Tutorial([
                    'product_id' => $product->id,
                    'step' => $tutorialData['step'],
                    'description' => $tutorialData['description'],
                ]);
                $tutorial->save();
            }

            foreach ($productData['reviews'] as $reviewData) {
                $review = new Review($reviewData);
                $product->reviews()->save($review);
            }
        }
    }
}

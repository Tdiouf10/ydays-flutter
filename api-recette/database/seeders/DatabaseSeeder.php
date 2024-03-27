<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> parent of 1147a91 (Merge pull request #2 from Tdiouf10/try-to-others-template)
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
        User::factory(10)->create();

=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> parent of 1147a91 (Merge pull request #2 from Tdiouf10/try-to-others-template)
    }
}

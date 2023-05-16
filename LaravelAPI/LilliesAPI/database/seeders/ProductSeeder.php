<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->delete();

        $faker = Factory::create();

        foreach(range(1,40) as $product) {
            Product::create([
                'name' => $faker->word,
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 0, 1000),
                'rating' => $faker->numberBetween(1,5),
                'image' => $faker->imageUrl(width: 50 , height: 50)
            ]);

        }

    }
}

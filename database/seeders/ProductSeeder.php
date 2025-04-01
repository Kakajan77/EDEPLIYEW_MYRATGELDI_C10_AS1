<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\City;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        if (City::count() === 0) {
            City::create(['name' => 'Ashgabat']);
        }

        if (Restaurant::count() === 0) {
            foreach (['Restoran A', 'Restoran B', 'Restoran C'] as $name) {
                Restaurant::create([
                    'name' => $name,
                    'address' => $faker->address(),
                    'description' => $faker->text(),
                    'city_id' => City::inRandomOrder()->first()->id,
                ]);
            }
        }

        if (Category::count() === 0) {
            foreach (['Fast Food', 'Cafe', 'Dessert'] as $cat) {
                Category::create(['name' => $cat]);
            }
        }

        $restaurantIds = Restaurant::pluck('id')->toArray();
        $categoryIds = Category::pluck('id')->toArray();

        if (empty($restaurantIds) || empty($categoryIds)) {
            echo "You need restaurants and categories before seeding products.\n";
            return;
        }

        // 🆕 50–100 aralyk bilen product döretmek
        $productCount = rand(50, 100);
        for ($i = 0; $i < $productCount; $i++) {
            Product::create([
                'name' => $faker->word(),
                'price' => $faker->randomFloat(2, 5, 100),
                'description' => $faker->sentence(),
                'restaurant_id' => $faker->randomElement($restaurantIds),
                'category_id' => $faker->randomElement($categoryIds),
            ]);
        }
    }
}



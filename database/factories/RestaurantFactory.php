<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $city= City::inRandomOrder()->first();
        return [
            'city_id'=>$city->id,
            'name'=>fake()->name(),
            'address'=>fake()->address(),
            'description'=>fake()->text(),
        ];
    }
}

/*

{
        $category = Category::inRandomOrder()->first();
        $album = Album::inRandomOrder()->first();

        return [
            'category_id' => $category->id,
            'artist_id' => $album->artist_id,
            'album_id' => $album->id,
            'name' => fake()->streetName(),
            'slug' => str()->random(5),
            'views' => fake()->numberBetween(50, 100),
            'downloads' => fake()->numberBetween(25, 50),
            'favorites' => fake()->numberBetween(0, 25),
        ];
    }


 */

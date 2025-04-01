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




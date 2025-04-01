<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $restaurant = Restaurant::inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'restaurant_id' => $restaurant ->id,
            'date'=> fake()->date(),
            'time'=> fake()->time(),
            'guest_count'=> fake()->numberBetween(50,100)
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

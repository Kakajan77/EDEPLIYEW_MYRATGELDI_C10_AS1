<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Cities – static array, 5–10
        $this->call(CategorySeeder::class);

        // 2. Categories – static menu types
        $this->call(CitySeeder::class);

        $this->call(ProductSeeder::class);

        // 3. Users – factory bilen 30 sany
        \App\Models\User::factory()->count(rand(20,30))->create();

        // 4. Restaurants – 15 sany (random city_id)
        \App\Models\Restaurant::factory()->count(rand(10,20))->create();



        // 6. Reservations – 100 sany (user_id & restaurant_id bilen)
        \App\Models\Reservation::factory()->count(rand(50,100))->create();
    }

}

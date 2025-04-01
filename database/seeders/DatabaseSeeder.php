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

        $this->call(CategorySeeder::class);


        $this->call(CitySeeder::class);

        $this->call(ProductSeeder::class);


        \App\Models\User::factory()->count(rand(20,30))->create();


        \App\Models\Restaurant::factory()->count(rand(10,20))->create();




        \App\Models\Reservation::factory()->count(rand(50,100))->create();
    }

}

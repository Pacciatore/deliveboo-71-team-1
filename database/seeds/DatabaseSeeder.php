<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(RestaurantSeeder::class);
         $this->call(PlateSeeder::class);
         $this->call(TypeSeeder::class);
         $this->call(OrderSeeder::class);
    }
}

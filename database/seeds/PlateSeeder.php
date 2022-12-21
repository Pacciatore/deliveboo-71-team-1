<?php

use Illuminate\Database\Seeder;
use App\Plate;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $usersIDs = DB::table('users')->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            $plate = new Plate();

            $plate->name = $faker->word() . $i;
            $plate->description = $faker->text();
            $plate->available = $faker->boolean();
            $plate->price = $faker->randomFloat(2, 0, 20);
            $plate->user_id = $faker->randomElement($usersIDs);

            $plate->save();
        }
    }
}

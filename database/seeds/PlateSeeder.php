<?php

use Illuminate\Database\Seeder;
use App\Plate;
use Faker\Generator as Faker;

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
        for ($i = 0; $i < 10; $i++) {
            $plate = new Plate();

            $plate->name = $faker->word() . $i;
            $plate->description = $faker->text();
            $plate->price = $faker->randomFloat(2, 0, 99);

            $plate->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Generator as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $MAX=25;
        for( $i = 0; $i < $MAX; $i++ ){

            $order = new Order();
            $order->ui_name = $faker->firstName($gender = null) . ' ' . $faker->lastName() ;
            $order->ui_email = $faker->safeEmail();
            $order->address = $faker->streetName() . ' n° ' . $faker->buildingNumber() . ', ' . $faker->city();
            $order->payment = $faker->boolean();
            $order->order_price = $faker->randomFloat(2, 1, 200);

            $order->save();
        }
    }
}

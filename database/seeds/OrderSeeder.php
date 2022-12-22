<?php

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Generator as Faker;
// use Illuminate\Support\Facades\DB;


use App\Plate;

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
        $MAX = 25;
        for ($i = 0; $i < $MAX; $i++) {

            $order = new Order();
            $order->ui_name = $faker->firstName($gender = null) . ' ' . $faker->lastName();
            $order->ui_email = $faker->safeEmail();
            $order->address = $faker->streetName() . ' n° ' . $faker->buildingNumber() . ', ' . $faker->city();
            $order->payment = $faker->boolean();
            $order->order_price = $faker->randomFloat(2, 1, 200);

            $order->save();

            $platesArray = $faker->randomNumber(2, true);
            $order->plates()->sync($platesArray);
        }
    }


    // private function getPlates($faker)
    // {
    //     $platesArray = [];

    //     // Ottengo un id random di ristoratore
    //     $user_id = $faker->numberBetween(1, 25);

    //     // Prendo tutti i piatti relativi al ristoratore
    //     $plates = DB::table('plates')->where('user_id', $user_id)->pluck('id')->first();
    //     $platesCounter = DB::table('plates')->where('user_id', $user_id)->count();

    //     // Ottengo un numero casuale tra uno ed il numero di piatti del ristorante
    //     $platesOrderNumber = $faker->numberBetween(1, $platesCounter);

    //     // Itera per il numero casuale di piatti presente nell'ordine
    //     for ($i = 0; $i < $platesOrderNumber; $i++) {

    //         // Ottiene un piatto casuale tra quelli trovati
    //         $randomPlate = $faker->randomElement($plates);

    //         // Se non è doppione viene aggiunto, se è doppione diminuisce il contatore
    //         if (!in_array($randomPlate, $platesArray)) {
    //             $platesArray[] = $randomPlate;
    //         } else {
    //             $platesArray = 1;
    //         }
    //         // Commentato perché potrebbe generare un loop
    //         // else {
    //         //     $i--;
    //         // }
    //     }

    //     return $platesArray == [] ? 1 : $platesArray;
    // }
}

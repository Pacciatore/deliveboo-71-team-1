<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = ['Italiano','Spagnolo','Internazionale','Giapponese','Messicano','Indiano','Pesce','Carne','Pizza','FastFood'];

        foreach($types as $model){
            $type = new Type();
            $type->name = $model;
            $type->save();
        }
    }
}

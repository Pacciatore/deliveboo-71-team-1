<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 25);
            $table->string('email', 50);
            $table->string('address', 50);
            $table->boolean('check_payament')->default(false);
            $table->decimal('total', 4, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders', function (Blueprint $table) {
            //
            $table->dropColumn([
                'name',
                'email',
                'address',
                'total',

            ]);
        });
    }
}

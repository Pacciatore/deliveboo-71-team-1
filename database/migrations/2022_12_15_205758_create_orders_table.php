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
            $table->string('ui_name', 50); //nome utente interessato
            $table->string('ui_email'); //email utente interessato
            $table->string('address', 80); //indirizzo utente interessato
            $table->boolean('payment')->default(0); //pagamento
            $table->decimal('order_price', 6, 2)->default(0); // prezzo totale dell'ordine
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

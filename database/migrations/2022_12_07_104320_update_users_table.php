<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('activity_name', 50);
            $table->string('address', 80);       
            $table->bigInteger('vat_number')->unsigned()->unique(); //partita iva
            $table->string('type')->nullable();
            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn([
                'activity_name', 
                'address', 
                'vat_number', 
                'type', 
                'slug'
            ]);
        });
    }
}

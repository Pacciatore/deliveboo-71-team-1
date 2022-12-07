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
            $table->string('activity_name', 50)->after('name');
            $table->string('address', 80)->after('email');       
            $table->bigInteger('vat_number')->unsigned()->unique()->after('address');; //partita iva
            $table->string('type')->nullable()->after('activity_name');;
            $table->string('slug')->unique()->after('activity_name');
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

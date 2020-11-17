<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumeTableTrxBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trx_bills', function (Blueprint $table) {
            $table->integer('unit_water_before')->after('unit_price_water_id');
            $table->integer('unit_water_after')->after('unit_price_water_id');
            $table->integer('unit_electric_before')->after('unit_price_electric_id');
            $table->integer('unit_electric_after')->after('unit_price_electric_id');
            $table->string('pic')->after('bill_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trx_bills', function (Blueprint $table) {
            //
        });
    }
}

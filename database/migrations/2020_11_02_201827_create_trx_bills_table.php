<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_bills', function (Blueprint $table) {
            $table->string('bill_id', 20)->primary();
            $table->string('room_id', 20);
            $table->string('bill_status_id', 20);
            $table->foreign('room_id')->references('room_id')->on('inf_rooms')->onDelete('cascade');
            $table->foreign('bill_status_id')->references('bill_status_id')->on('type_bill_statuses')->onDelete('cascade');
            $table->timestamps();
            $table->integer('total_payment');
            $table->string('unit_price_water_id',20);
            $table->integer('water_price');
            $table->string('unit_price_electric_id',20);
            $table->integer('electric_price');
            $table->foreign('unit_price_water_id')->references('unit_price_id')->on('type_unit_prices')->onDelete('cascade');
            $table->foreign('unit_price_electric_id')->references('unit_price_id')->on('type_unit_prices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trx_bills');
    }
}

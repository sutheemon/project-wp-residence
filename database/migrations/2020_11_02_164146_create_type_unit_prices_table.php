<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeUnitPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_unit_prices', function (Blueprint $table) {
            $table->string('unit_price_id', 20)->primary();
            $table->string('name_price', 100);
            $table->integer('value_unit');
        });

        DB::table('type_unit_prices')->insert(
            [
                [
                    'unit_price_id' => 'UW',
                    'name_price' => 'Amount of water bill',
                    'value_unit' => '17'
                ],

                [
                    'unit_price_id' => 'UE',
                    'name_price' => 'Amount of electric bill',
                    'value_unit' => '6'
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_unit_prices');
    }
}

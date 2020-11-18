<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFlidsDataBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('trx_bills')->insert(
            [
                [
                    'bill_id' => '170920_A101',
                    'room_id' => 'A101',
                    'bill_status_id' => 'BS001',
                    'total_payment' => '4907',
                    'unit_price_water_id' => 'UW',
                    'water_price' => '85',
                    'electric_price' => '75',
                    'unit_price_electric_id' => 'UE',
                    'unit_water_before' => '0',
                    'unit_water_after' => '5',
                    'unit_electric_before' => '0',
                    'unit_electric_after' => '12',
                    'pic' => '/storage/170920_A101.jpeg',
                    'created_at' => '2020-09-17 07:20:29'
                ],
                [
                    'bill_id' => '171020_A101',
                    'room_id' => 'A101',
                    'bill_status_id' => 'BS001',
                    'total_payment' => '4895',
                    'unit_price_water_id' => 'UW',
                    'water_price' => '85',
                    'electric_price' => '60',
                    'unit_price_electric_id' => 'UE',
                    'unit_water_before' => '5',
                    'unit_water_after' => '10',
                    'unit_electric_before' => '12',
                    'unit_electric_after' => '22',
                    'pic' => '/storage/171020_A101.jpeg',
                    'created_at' => '2020-10-17 07:20:29'
                ],

                [
                    'bill_id' => '171120_A101',
                    'room_id' => 'A101',
                    'bill_status_id' => 'BS001',
                    'total_payment' => '4883',
                    'unit_price_water_id' => 'UW',
                    'water_price' => '85',
                    'electric_price' => '48',
                    'unit_price_electric_id' => 'UE',
                    'unit_water_before' => '10',
                    'unit_water_after' => '15',
                    'unit_electric_before' => '22',
                    'unit_electric_after' => '30',
                    'pic' =>'',
                    'created_at' => '2020-11-17 07:20:29'
                ],
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
        Schema::table('trx_bills', function (Blueprint $table) {
            //
        });
    }
}

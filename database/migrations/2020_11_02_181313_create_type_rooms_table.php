<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_rooms', function (Blueprint $table) {
            $table->string('room_type_id', 20)->primary();
            $table->string('name_room', 100);
            $table->string('desc_room', 200);
            $table->integer('price_room');
        });

        DB::table('type_rooms')->insert(
            [[
                'room_type_id' => 'RT001',
                'name_room' => 'studio',
                'desc_room' => '25 sq.m',
                'price_room' => '4750',
            ]]
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_rooms');
    }
}

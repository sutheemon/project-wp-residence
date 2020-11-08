<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_rooms', function (Blueprint $table) {
            $table->string('room_id', 20)->primary();
            $table->string('room_build', 50);
            $table->string('room_floor', 50);
            $table->string('room_type_id', 20);
            $table->string('room_status_id', 20);
            $table->foreign('room_type_id')->references('room_type_id')->on('type_rooms')->onDelete('cascade');
            $table->foreign('room_status_id')->references('room_status_id')->on('type_room_statuses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inf_rooms');
    }
}

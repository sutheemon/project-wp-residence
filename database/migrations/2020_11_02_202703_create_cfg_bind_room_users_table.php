<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgBindRoomUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_bind_room_users', function (Blueprint $table) {
            $table->string('room_user_id', 20)->primary();
            $table->string('user_id', 20);
            $table->string('room_id', 20);
            $table->foreign('user_id')->references('user_id')->on('inf_users')->onDelete('cascade');
            $table->foreign('room_id')->references('room_id')->on('inf_rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_bind_room_users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeRoomStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_room_statuses', function (Blueprint $table) {
            $table->string('room_status_id', 20)->primary();
            $table->string('name_room_status', 100);
        });

        DB::table('type_room_statuses')->insert(
            [
                [
                    'room_status_id' => 'RS001',
                    'name_room_status' => 'Room available'
                ],

                [
                    'room_status_id' => 'RS002',
                    'name_room_status' => 'Room not available'
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
        Schema::dropIfExists('type_room_statuses');
    }
}

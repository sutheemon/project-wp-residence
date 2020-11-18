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
            $table->string('user_id', 20)->nullable();
            $table->foreign('room_type_id')->references('room_type_id')->on('type_rooms')->onDelete('cascade');
            $table->foreign('room_status_id')->references('room_status_id')->on('type_room_statuses')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('inf_users')->onDelete('cascade');
            // $table->timestamps();
        });

        DB::table('inf_rooms')->insert(
            [
                [
                    'room_id'    => 'A000',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'A001'
                ],

                [
                    'room_id'    => 'A101',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U001'
                ],

                [
                    'room_id'    => 'A102',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U002'
                ],

                [
                    'room_id'    => 'A103',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A104',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A105',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U003'
                ],

                [
                    'room_id'    => 'A106',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A107',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U004'
                ],

                [
                    'room_id'    => 'A108',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U005'
                ],

                [
                    'room_id'    => 'A109',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A110',
                    'room_build'     => 'A',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A201',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A202',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A203',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U006'
                ],

                [
                    'room_id'    => 'A204',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U007'
                ],

                [
                    'room_id'    => 'A205',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A206',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A207',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U008'
                ],

                [
                    'room_id'    => 'A208',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'A209',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U009'
                ],

                [
                    'room_id'    => 'A210',
                    'room_build'     => 'A',
                    'room_floor'  => '2',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'B101',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U010'
                ],

                [
                    'room_id'    => 'B102',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'B103',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],
                
                [
                    'room_id'    => 'B104',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'B105',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'B106',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'B107',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'B108',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'B109',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS001',
                    'user_id' => null
                ],

                [
                    'room_id'    => 'B110',
                    'room_build'     => 'B',
                    'room_floor'  => '1',
                    'room_type_id'   => 'RT001',
                    'room_status_id' => 'RS002',
                    'user_id' => 'U011'
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
        Schema::dropIfExists('inf_rooms');
    }
}

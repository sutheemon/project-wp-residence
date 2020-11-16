<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_users', function (Blueprint $table) {
            $table->string('user_id', 20)->primary();
            $table->string('id_card', 50);
            $table->string('F_name', 200);
            $table->string('L_name', 200);
            $table->string('phone_number', 50);
            $table->string('email', 200);
            $table->string('address', 200);
            $table->timestamps();
        });
    
        DB::table('inf_users')->insert (
            [
                [
                    'user_id' => 'A001',
                    'id_card' => '1236541236521',
                    'F_name' => 'Admin',
                    'L_name' => 'Room',
                    'phone_number' => '0991234567',
                    'email' => 'Presidence@gmail.com',
                    'address' => '17/4 Village ChalongKrung Road,
                    Ladkrabang Sub-district, Ladkrabang District,
                    Bangkok, 10520',
                ],

                [
                    'user_id' => 'U001',
                    'id_card' => '6202699729288',
                    'F_name' => 'Ploy',
                    'L_name' => 'Mudle',
                    'phone_number' => '0988270289',
                    'email' => 'ploymudle@gmail.com',
                    'address' => 'Rayong',
                ],
            
                [
                    'user_id' => 'U002',
                    'id_card' => '4816856096866',
                    'F_name' => 'Pat',
                    'L_name' => 'Sut',
                    'phone_number' => '0922296697',
                    'email' => 'milkkywayyy@gmail.com',
                    'address' => 'Chaiyaphum',
                ],
            
                [
                    'user_id' => 'U003',
                    'id_card' => '8385858703693',
                    'F_name' => 'Suthee',
                    'L_name' => 'Pet',
                    'phone_number' => '0992143017',
                    'email' => 'stmp_r@gmail.com',
                    'address' => 'Bangkok',
                ],
            
                [
                    'user_id' => 'U004',
                    'id_card' => '6413792170847',
                    'F_name' => 'Ahay',
                    'L_name' => 'Gon',
                    'phone_number' => '0999999999',
                    'email' => 'aheye@gmail.com',
                    'address' => 'Bangkok',
                ],
                
                [
                    'user_id' => 'U005',
                    'id_card' => '1236512364789',
                    'F_name' => 'Crazy',
                    'L_name' => 'Duck',
                    'phone_number' => '0223651247',
                    'email' => 'Crazy_Duck@gmail.com',
                    'address' => 'Bangkok',
                ],

                [
                    'user_id' => 'U006',
                    'id_card' => '7458961236541',
                    'F_name' => 'White',
                    'L_name' => 'Bird',
                    'phone_number' => '0995113256',
                    'email' => 'white@gmail.com',
                    'address' => 'Bangkok',
                ],

                [
                    'user_id' => 'U007',
                    'id_card' => '0120032103652',
                    'F_name' => 'Black',
                    'L_name' => 'Lady',
                    'phone_number' => '0859563214',
                    'email' => 'blackLady@gmail.com',
                    'address' => 'Bangkok',
                ],

                [
                    'user_id' => 'U008',
                    'id_card' => '7896541236547',
                    'F_name' => 'Tiny',
                    'L_name' => 'Lish',
                    'phone_number' => '0665412365',
                    'email' => 'lish@gmail.com',
                    'address' => 'Bangkok',
                ],

                [
                    'user_id' => 'U009',
                    'id_card' => '7896566662132',
                    'F_name' => 'Lazy',
                    'L_name' => 'Dog',
                    'phone_number' => '0997458123',
                    'email' => 'lazy@gmail.com',
                    'address' => 'Bangkok',
                ],

                [
                    'user_id' => 'U010',
                    'id_card' => '7777444111256',
                    'F_name' => 'Brown',
                    'L_name' => 'Bear',
                    'phone_number' => '0997456325',
                    'email' => 'bear@gmail.com',
                    'address' => 'Bangkok',
                ],

                [
                    'user_id' => 'U011',
                    'id_card' => '1223214562321',
                    'F_name' => 'Golden',
                    'L_name' => 'Strich',
                    'phone_number' => '0332145698',
                    'email' => 'strich@gmail.com',
                    'address' => 'Bangkok',
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
        Schema::dropIfExists('inf_users');
    }
}

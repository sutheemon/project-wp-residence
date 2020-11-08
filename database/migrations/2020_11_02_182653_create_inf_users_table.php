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
        });
    
        DB::table('inf_users')->insert (
            [
                [
                    'user_id' => 'U001',
                    'id_card' => '6202699729288',
                    'F_name' => 'Ploy',
                    'L_name' => 'Bun',
                    'phone_number' => '098 827 0289',
                    'email' => 'ploymudle@gmail.com',
                    'address' => 'Rayong',
                ],
            
                [
                    'user_id' => 'U002',
                    'id_card' => '4816856096866',
                    'F_name' => 'Pat',
                    'L_name' => 'Sut',
                    'phone_number' => '092 229 6697',
                    'email' => 'milkkywayyy@gmail.com',
                    'address' => 'Chaiyaphum',
                ],
            
                [
                    'user_id' => 'U003',
                    'id_card' => '8385858703693',
                    'F_name' => 'Su',
                    'L_name' => 'Phet',
                    'phone_number' => '099 214 3017',
                    'email' => 'stmp_r@gmail.com',
                    'address' => 'Bangkok',
                ],
            
                [
                    'user_id' => 'U004',
                    'id_card' => '6413792170847',
                    'F_name' => 'Ahay',
                    'L_name' => 'Gon',
                    'phone_number' => '099 999 9999',
                    'email' => 'aheye@gmail.com',
                    'address' => 'Bangkok',
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
        Schema::dropIfExists('inf_users');
    }
}

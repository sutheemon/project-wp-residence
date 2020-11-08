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

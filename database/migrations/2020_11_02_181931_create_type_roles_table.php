<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_roles', function (Blueprint $table) {
            $table->string('role_type_id', 20)->primary();
            $table->string('name_role', 100);
        });

        DB::table('type_roles')->insert(
            [
                [
                    'role_type_id' => 'A',
                    'name_role' => 'admin'
                ],

                [
                    'role_type_id' => 'U',
                    'name_role' => 'user'
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
        Schema::dropIfExists('type_roles');
    }
}

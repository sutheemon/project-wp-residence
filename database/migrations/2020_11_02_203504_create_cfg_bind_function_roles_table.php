<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgBindFunctionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_bind_function_roles', function (Blueprint $table) {
            $table->string('function_role_id', 20)->primary();
            $table->string('function_id', 20);
            $table->string('role_type_id', 20);
            $table->foreign('function_id')->references('function_id')->on('acl_functions')->onDelete('cascade');
            $table->foreign('role_type_id')->references('role_type_id')->on('type_roles')->onDelete('cascade');
        });

        DB::table('cfg_bind_function_roles')->insert(
            [
                [
                    'function_role_id' => 'MR01', 
                    'function_id' => 'M001', 
                    'role_type_id' => 'A'
                ],

                [
                    'function_role_id' => 'MR02', 
                    'function_id' => 'M001', 
                    'role_type_id' => 'U'
                ],

                [
                    'function_role_id' => 'MR03', 
                    'function_id' => 'M002', 
                    'role_type_id' => 'A'
                ],

                [
                    'function_role_id' => 'MR04', 
                    'function_id' => 'M003', 
                    'role_type_id' => 'A'
                ],


                [
                    'function_role_id' => 'MR06', 
                    'function_id' => 'M004', 
                    'role_type_id' => 'U'
                ],

                [
                    'function_role_id' => 'MR07', 
                    'function_id' => 'M005', 
                    'role_type_id' => 'U'
                ],

                [
                    'function_role_id' => 'MR08', 
                    'function_id' => 'M006', 
                    'role_type_id' => 'A'
                ],

                [
                    'function_role_id' => 'MR09', 
                    'function_id' => 'M006', 
                    'role_type_id' => 'U'
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
        Schema::dropIfExists('cfg_bind_function_roles');
    }
}

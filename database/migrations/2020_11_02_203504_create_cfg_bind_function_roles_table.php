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

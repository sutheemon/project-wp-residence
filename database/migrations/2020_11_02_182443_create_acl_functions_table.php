<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acl_functions', function (Blueprint $table) {
            $table->string('function_id', 20)->primary();
            $table->string('name_function', 100);
        });

        DB::table('acl_functions')->insert(
            [
                [
                    'function_id' => 'M001',
                    'name_function' => 'Home'
                ],

                [
                    'function_id' => 'M002',
                    'name_function' => 'Manage rental information'
                ],

                [
                    'function_id' => 'M003',
                    'name_function' => 'Manage bills'
                ],

                [
                    'function_id' => 'M004',
                    'name_function' => 'Manage profile'
                ],

                [
                    'function_id' => 'M005',
                    'name_function' => 'Pay bill'
                ],

                [
                    'function_id' => 'M006',
                    'name_function' => 'Sign Out'
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
        Schema::dropIfExists('acl_functions');
    }
}
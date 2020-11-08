<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acl_user_accounts', function (Blueprint $table) {
            $table->string('account_id', 20)->primary();
            $table->string('user_name', 50);
            $table->string('password', 50);
            $table->string('user_id', 20);
            $table->string('role_type_id', 20);
            $table->foreign('user_id')->references('user_id')->on('inf_users')->onDelete('cascade');
            $table->foreign('role_type_id')->references('role_type_id')->on('type_roles')->onDelete('cascade');

        });

        DB::table('acl_user_accounts')->insert(
            [
                [
                    'account_id'    => 'ACC001',
                    'user_name'     => 'admin1',
                    'password'  => 'admin123',
                    'user_id'   => 'U001',
                    'role_type_id' => 'A',
                ],

                [
                    'account_id'    => 'ACC002',
                    'user_name'     => 'admin2',
                    'password'  => 'admin456',
                    'user_id'   => 'U002',
                    'role_type_id' => 'A',
                ],

                [
                    'account_id'    => 'ACC003',
                    'user_name'     => 'admin3',
                    'password'  => 'admin789',
                    'user_id'   => 'U003',
                    'role_type_id' => 'A',
                ],

                [
                    'account_id'    => 'ACC004',
                    'user_name'     => 'admin4',
                    'password'  => 'A101',
                    'user_id'   => 'U004',
                    'role_type_id' => 'U',
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
        Schema::dropIfExists('acl_user_accounts');
    }
}

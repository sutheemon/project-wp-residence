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

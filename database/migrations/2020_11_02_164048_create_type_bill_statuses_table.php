<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeBillStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_bill_statuses', function (Blueprint $table) {
            $table->string('bill_status_id', 20)->primary();
            $table->string('name_bill_status', 100);
        });

        DB::table('type_bill_statuses')->insert(
            [
                [
                    'bill_status_id' => 'BS001',
                    'name_bill_status' => 'Unpaid bill'
                ],

                [
                    'bill_status_id' => 'BS002',
                    'name_bill_status' => 'Paid'
                ],

                [
                    'bill_status_id' => 'BS003',
                    'name_bill_status' => 'In the midst of verification. '
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
        Schema::dropIfExists('type_bill_statuses');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_details', function (Blueprint $table) {
            $table->string('trans_id', 25)->primary();
            $table->string('order_id', 225)->nullable()->index('trans_dtl_order_id_idx');
            $table->string('trans_type', 45)->default('sale');
            $table->float('gross_amt', 10, 0)->nullable();
            $table->float('fee_amt', 10, 0)->nullable();
            $table->float('tax_amt', 10, 0)->nullable();
            $table->float('auth_amt', 10, 0)->nullable();
            $table->float('settle_amt', 10, 0)->nullable();
            $table->string('card_type', 25)->nullable();
            $table->dateTime('trans_date')->nullable()->index('trans_dtl_order_date_idx');
            $table->string('auth_net_acct', 45)->nullable();
            $table->string('batchid', 45)->nullable();
            $table->dateTime('batchdate')->nullable();
            $table->string('in_type', 64)->nullable();
            $table->string('in_status', 64)->nullable();
            $table->string('in_response', 64)->nullable();
            $table->string('in_resp_descr', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans_details');
    }
};

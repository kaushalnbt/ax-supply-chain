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
        Schema::create('customer_coupons', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('cust_id')->index('indx_custid');
            $table->string('base_coupon', 45);
            $table->string('onetime_coupon', 45);
            $table->dateTime('coupon_end_date');
            $table->bigInteger('added_by');
            $table->string('notes', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_coupons');
    }
};

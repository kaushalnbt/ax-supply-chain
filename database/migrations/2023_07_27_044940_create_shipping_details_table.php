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
        Schema::create('shipping_details', function (Blueprint $table) {
            $table->string('order_id', 255)->primary();
            $table->decimal('ship_weight', 5);
            $table->string('tracking', 255)->index('tracking_num');
            $table->dateTime('ship_date')->index('ship_date');
            $table->string('carrier', 45)->index('carrier');
            $table->decimal('shipping_cost', 5)->nullable();
            $table->decimal('shipper_billed_weight', 5)->nullable();
            $table->string('shipper_zone', 5)->nullable();
            $table->decimal('shipper_net_cost', 5)->nullable();
            $table->string('shipper_dest_zip', 10)->nullable();
            $table->string('shipper_city', 64)->nullable();
            $table->string('shipper_state', 64)->nullable();
            $table->string('row_status', 45)->nullable();
            $table->integer('vendor_weight')->nullable();
            $table->string('vendor_zone', 50)->nullable();
            $table->string('vendor_service_level', 100)->nullable();
            $table->date('vendor_pickup_date')->nullable();
            $table->string('vendor_billed_charge', 25)->nullable()->index('vendor_billed_charge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_details');
    }
};

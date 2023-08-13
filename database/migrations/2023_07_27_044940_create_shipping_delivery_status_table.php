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
        Schema::create('shipping_delivery_status', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('tracking_id', 100)->unique('indx_tracking');
            $table->string('delivery_status', 50);
            $table->dateTime('last_sync_with_ups');
            $table->longText('shipment_details');
            $table->dateTime('delivery_datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_delivery_status');
    }
};

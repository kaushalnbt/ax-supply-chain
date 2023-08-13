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
        Schema::create('fulfillment_data', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->unsignedInteger('fulfillment_center_id')->index('fulfillment_center_id_INDEX');
            $table->unsignedInteger('fulfillment_status_id')->index('fulfillment_status_id_INDEX');
            $table->string('order_id', 32)->index('order_id_INDEX');
            $table->unsignedInteger('transaction_id')->nullable()->index('trans_id_idx');
            $table->decimal('handling_cost', 15)->default(0);
            $table->decimal('material_cost', 15)->default(0);
            $table->decimal('storage_cost', 15)->default(0);
            $table->decimal('special_cost', 15)->default(0);
            $table->decimal('shipping_cost', 15)->default(0)->index('shipping_cost_INDEX');
            $table->decimal('total_cost', 15)->default(0)->index('total_cost_INDEX');
            $table->integer('quantity_out')->default(0);
            $table->string('tracking_number', 100)->nullable()->index('tracking_number_idx');
            $table->text('note')->nullable();
            $table->timestamp('transmitted_at')->nullable();
            $table->timestamp('handled_at')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
            $table->softDeletes();

            $table->index(['fulfillment_center_id', 'fulfillment_status_id'], 'fulfillment_center_id_fulfillment_status_id_INDEX');
            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fulfillment_data');
    }
};

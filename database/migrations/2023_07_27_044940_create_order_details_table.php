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
        Schema::create('order_details', function (Blueprint $table) {
            $table->string('order_id', 255);
            $table->string('cust_id_old', 45)->nullable();
            $table->decimal('price', 10)->default(0);
            $table->string('sku', 255);
            $table->string('itemId', 100)->nullable();
            $table->integer('quantity');
            $table->integer('line_item')->default(1);
            $table->string('line_item_trans_type', 255)->nullable();
            $table->decimal('unit_cost', 10)->nullable()->default(0);
            $table->string('notes', 1024)->nullable();
            $table->string('od_status', 100)->nullable()->index('od_status');
            $table->enum('kit', ['Y', 'N'])->nullable()->default('N');
            $table->enum('kit_component', ['Y', 'N'])->nullable()->default('N');
            $table->decimal('refund_amount', 10)->nullable()->default(0);
            $table->tinyInteger('prg_swappable_permission')->default(0);
            $table->string('line_item_autoship', 10)->nullable();

            $table->index(['kit_component', 'sku', 'price', 'order_id'], 'comp_sku_price_id_idx');
            $table->index(['order_id', 'line_item', 'sku', 'od_status', 'refund_amount'], 'order_id_line_item_sku_od_status_refund_amount');
            $table->primary(['order_id', 'line_item']);
            $table->index(['order_id', 'sku', 'od_status', 'line_item'], 'sku_line_item_od_status_idx');
            $table->index(['sku', 'od_status'], 'sku_od_status_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
};

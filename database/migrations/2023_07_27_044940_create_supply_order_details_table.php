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
        Schema::create('supply_order_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('supply_order_id');
            $table->integer('part_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->integer('qty_ordered')->nullable();
            $table->integer('qty_received')->nullable();
            $table->dateTime('date_received')->nullable();
            $table->string('status', 32)->nullable();
            $table->text('notes')->nullable();
            $table->decimal('unit_price', 10, 4)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_order_details');
    }
};

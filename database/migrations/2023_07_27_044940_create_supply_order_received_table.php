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
        Schema::create('supply_order_received', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('supply_order_id')->index('supplied_indx_1');
            $table->bigInteger('item_id')->index('item_indx_1');
            $table->integer('qty_received');
            $table->dateTime('date_received');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_order_received');
    }
};

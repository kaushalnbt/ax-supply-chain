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
        Schema::create('supply_orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('supplier_id');
            $table->integer('shipto_id')->nullable();
            $table->dateTime('order_date');
            $table->string('status', 32)->nullable()->default('new');
            $table->string('title', 255)->nullable();
            $table->text('internal_notes')->nullable();
            $table->text('order_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_orders');
    }
};

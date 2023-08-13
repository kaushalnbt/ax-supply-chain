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
        Schema::create('supply_order_payments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('order_id');
            $table->string('type', 20)->default('payment');
            $table->timestamp('payment_date')->useCurrent();
            $table->decimal('amount', 10)->nullable();
            $table->string('title', 256)->nullable();
            $table->text('notes')->nullable();
            $table->integer('balance_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_order_payments');
    }
};

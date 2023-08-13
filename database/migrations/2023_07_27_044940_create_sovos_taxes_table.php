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
        Schema::create('sovos_taxes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('order_id', 45)->index('order_id');
            $table->string('tax_type', 128)->nullable();
            $table->decimal('tax_amount', 10)->nullable();
            $table->decimal('tax_rate', 10, 5)->nullable();
            $table->decimal('taxable_amount', 10)->nullable();
            $table->decimal('gross_amount', 10)->nullable();
            $table->decimal('exempt_amount', 10)->nullable();
            $table->string('state', 45)->nullable();
            $table->dateTime('tax_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sovos_taxes');
    }
};

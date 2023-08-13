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
        Schema::create('unit_costs', function (Blueprint $table) {
            $table->integer('unit_pid', true);
            $table->string('prod_sku', 255);
            $table->decimal('unit_cost', 5);
            $table->date('date')->default('2012-01-01')->comment('THis is the date this cost becomes active,  Always choose the row with the latest date to get the current costs.');

            $table->primary(['unit_pid', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_costs');
    }
};

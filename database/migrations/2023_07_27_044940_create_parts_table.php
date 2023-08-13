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
        Schema::create('parts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 255)->nullable();
            $table->string('supplier_sku', 64)->nullable();
            $table->integer('supplier')->nullable();
            $table->integer('low_point')->nullable();
            $table->integer('reorder_amount')->nullable();
            $table->tinyInteger('archived')->nullable();
            $table->integer('case_qty')->nullable();
            $table->string('supplier_item_name', 128)->nullable();
            $table->string('supplier_desc', 1024)->nullable();
            $table->decimal('unit_cost', 10, 4)->nullable();
            $table->integer('unit_cost_factor')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parts');
    }
};

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
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id', true)->index('id_idx');
            $table->string('name', 128);
            $table->integer('low_point')->nullable();
            $table->integer('reorder_amount')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->string('category', 45)->nullable()->index('category_idx');
            $table->tinyInteger('archived')->nullable()->default(0)->index('archived_idx');
            $table->decimal('unit_cost', 5)->nullable()->index('unit_cost_idx');
            $table->string('supplier_item_name', 128)->nullable();
            $table->string('supplier_desc', 1024)->nullable();
            $table->integer('case_qty')->nullable();
            $table->integer('pallet_qty')->nullable();
            $table->decimal('case_weight', 6)->nullable();
            $table->decimal('pallet_weight', 6)->nullable();
            $table->decimal('unit_weight', 6)->nullable();
            $table->string('velocity_calc_type', 45)->nullable();

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
        Schema::dropIfExists('items');
    }
};

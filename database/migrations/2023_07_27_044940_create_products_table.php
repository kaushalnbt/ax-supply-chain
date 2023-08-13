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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('sku', 255)->unique('sku_UNIQUE');
            $table->string('name', 255);
            $table->string('short_name', 128)->nullable();
            $table->decimal('unit_cost')->nullable();
            $table->decimal('sale_price');
            $table->integer('unit_id')->nullable();
            $table->string('role', 20)->nullable();
            $table->string('ao_module', 20)->nullable();
            $table->integer('pick_fee_mult')->nullable()->default(1);
            $table->tinyInteger('digital')->nullable()->default(0);
            $table->tinyInteger('kit_sku')->nullable()->default(0);
            $table->string('company', 10)->nullable();
            $table->tinyInteger('archive')->nullable()->default(0)->index('archive_idx');
            $table->string('category', 45)->nullable()->index('category_idx');
            $table->tinyInteger('add_to_aweber')->nullable();
            $table->string('aweber_list', 45)->nullable();
            $table->string('aweber_tags', 45)->nullable();
            $table->string('group_tag', 500)->nullable();
            $table->enum('allow_in_feed', ['Y', 'N'])->nullable()->default('N');
            $table->string('product_url', 500)->nullable();
            $table->string('product_image_url', 500)->nullable();
            $table->string('sub_category', 100)->nullable();
            $table->string('tags', 500)->nullable();

            $table->index(['sku', 'category'], 'sku_category_idx');
            $table->index(['unit_cost', 'sku'], 'unit_cost_sku_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

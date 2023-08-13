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
        Schema::create('item_inventory', function (Blueprint $table) {
            $table->integer('id', true)->index('id_idx');
            $table->integer('item_id')->index('item_id');
            $table->string('inv_type', 45)->default('sub');
            $table->integer('inv_amount')->nullable();
            $table->dateTime('inv_date')->nullable();
            $table->string('ref_id', 45)->nullable();
            $table->integer('status')->nullable();

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
        Schema::dropIfExists('item_inventory');
    }
};

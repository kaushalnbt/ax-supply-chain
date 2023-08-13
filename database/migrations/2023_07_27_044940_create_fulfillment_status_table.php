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
        Schema::create('fulfillment_status', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 45)->unique('name_UNIQUE');
            $table->text('description')->nullable();

            $table->index(['id', 'name'], 'id_name_INDEX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fulfillment_status');
    }
};

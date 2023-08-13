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
        Schema::create('item_parts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('item');
            $table->integer('part');
            $table->integer('qty')->default(1);

            $table->unique(['item', 'part'], 'itempart_uq');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_parts');
    }
};

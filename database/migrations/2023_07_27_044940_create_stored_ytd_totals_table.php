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
        Schema::create('stored_ytd_totals', function (Blueprint $table) {
            $table->integer('id', true);
            $table->year('year');
            $table->decimal('gross', 7);
            $table->decimal('net', 7);

            $table->primary(['id', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_ytd_totals');
    }
};

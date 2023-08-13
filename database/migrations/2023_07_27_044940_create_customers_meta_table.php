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
        Schema::create('customers_meta', function (Blueprint $table) {
            $table->integer('cust_id');
            $table->string('meta_tag', 45);
            $table->string('meta_value', 256)->nullable();

            $table->primary(['cust_id', 'meta_tag']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_meta');
    }
};

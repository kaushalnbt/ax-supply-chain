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
        Schema::create('customer_update_history', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('cust_id');
            $table->bigInteger('updated_by');
            $table->string('old_email', 100);
            $table->string('new_email', 100);
            $table->timestamp('upd_date')->useCurrentOnUpdate()->useCurrent();
            $table->string('screen', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_update_history');
    }
};

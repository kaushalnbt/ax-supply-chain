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
        Schema::create('ups_charges', function (Blueprint $table) {
            $table->string('Account Number', 128)->nullable();
            $table->string('Invoice Number', 128)->nullable();
            $table->string('Origin Country', 128)->nullable();
            $table->string('Invoice Date', 128)->nullable();
            $table->string('Pickup Record', 128)->nullable();
            $table->string('Due Date', 128)->nullable();
            $table->string('Pickup Date', 128)->nullable();
            $table->string('Tracking Number', 128)->nullable()->index('ups_Charge_track_idx');
            $table->string('Service Level', 128)->nullable();
            $table->string('Zone', 128)->nullable();
            $table->string('Import Date', 128)->nullable();
            $table->integer('Amount Due')->nullable();
            $table->double('Published Charge')->nullable();
            $table->double('Incentives')->nullable();
            $table->double('Net Amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ups_charges');
    }
};

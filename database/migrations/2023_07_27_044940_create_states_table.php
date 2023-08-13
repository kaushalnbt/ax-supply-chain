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
        Schema::create('states', function (Blueprint $table) {
            $table->string('code', 4)->primary();
            $table->string('name', 128)->nullable();
            $table->string('country', 45)->nullable();
            $table->enum('state_taxes', ['Y', 'N'])->nullable()->default('Y');
            $table->enum('tax_digital', ['Y', 'N'])->nullable()->default('N');
            $table->enum('tax_reg_status', ['not-registered', 'in-progress', 'complete'])->nullable()->default('not-registered');
            $table->date('tax_reg_renewal')->nullable();
            $table->enum('payment_frequency', ['monthly', 'quarterly', 'annual'])->nullable();
            $table->string('website', 255)->nullable();

            $table->index(['name', 'code'], 'name_code_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
};

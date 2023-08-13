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
        Schema::create('specific_shipping_fees', function (Blueprint $table) {
            $table->string('prod_sku', 45);
            $table->decimal('mailer_fee', 5)->default(0);
            $table->decimal('misc_fee', 5)->default(0);
            $table->timestamp('date')->useCurrent();

            $table->primary(['prod_sku', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specific_shipping_fees');
    }
};

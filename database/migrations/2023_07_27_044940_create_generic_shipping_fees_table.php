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
        Schema::create('generic_shipping_fees', function (Blueprint $table) {
            $table->decimal('picking_fees', 5)->default(0);
            $table->decimal('packing_fees_dom', 5)->default(0);
            $table->decimal('packing_fees_intl', 5)->default(0);
            $table->timestamp('date')->useCurrent()->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generic_shipping_fees');
    }
};

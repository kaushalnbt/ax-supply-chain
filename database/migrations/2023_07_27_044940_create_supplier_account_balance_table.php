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
        Schema::create('supplier_account_balance', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('supplier_id');
            $table->enum('type', ['payment', 'charge']);
            $table->decimal('amount', 10);
            $table->dateTime('trans_date')->nullable()->useCurrent();
            $table->string('notes', 255)->nullable();
            $table->bigInteger('order_id')->nullable();

            $table->index(['supplier_id', 'type'], 'supplier_type_indx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_account_balance');
    }
};

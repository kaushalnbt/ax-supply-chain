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
        Schema::create('exceptions', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('exception_type_id');
            $table->string('order_id', 50)->index('order_id');
            $table->text('description');
            $table->integer('exception_status_id');
            $table->integer('user_id');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->integer('line_item')->nullable();
            $table->bigInteger('exception_level_id')->default(1);

            $table->index(['order_id', 'exception_type_id', 'exception_status_id'], 'order_id_type_status_idx');
            $table->unique(['order_id'], 'order_id_uniq');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exceptions');
    }
};

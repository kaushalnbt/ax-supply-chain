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
        Schema::create('trans_report_status', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->date('report_date')->nullable();
            $table->string('report_type', 50)->nullable();
            $table->smallInteger('report_processed')->nullable();
            $table->smallInteger('authnet_acct_no');
            $table->dateTime('email_sent_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans_report_status');
    }
};

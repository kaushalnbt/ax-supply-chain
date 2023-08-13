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
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('cust_id', true);
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('company', 255)->nullable();
            $table->string('address', 255);
            $table->string('city', 45);
            $table->string('state', 45);
            $table->string('zip', 45)->index('cust_zip');
            $table->string('country', 45)->index('cust_Country');
            $table->string('email', 128)->index('cust_main_email');
            $table->string('email2', 128)->nullable();
            $table->string('phone', 14)->nullable();
            $table->integer('main_cust_id')->nullable()->index('cust_main_cust_id_idx');
            $table->integer('in_portal')->nullable();
            $table->dateTime('last_aweber_update')->nullable();
            $table->timestamp('date_created')->nullable()->useCurrent();
            $table->tinyInteger('deld')->nullable();
            $table->string('aweber_cust_list_status', 45)->nullable();
            $table->string('ship_address', 255)->nullable();
            $table->string('ship_city', 45)->nullable();
            $table->string('ship_state', 45)->nullable();
            $table->string('ship_zip', 45)->nullable()->index('cust_ship_zip');
            $table->string('ship_country', 45)->nullable();
            $table->dateTime('last_ac_update')->nullable();
            $table->string('ac_cust_list_status', 45)->nullable();
            $table->string('source', 100)->nullable();
            $table->integer('rating')->nullable()->index('rating_idx');

            $table->index(['ac_cust_list_status', 'last_ac_update'], 'cust_ac_list_status');
            $table->index(['city', 'state'], 'cust_city_state');
            $table->index(['aweber_cust_list_status', 'date_created'], 'cust_date_created');
            $table->index(['aweber_cust_list_status', 'date_created'], 'cust_main_aweber_status');
            $table->index(['ship_city', 'ship_state'], 'cust_ship_city_state');
            $table->index(['email', 'cust_id'], 'email_cust_id_idx');
            $table->index(['email', 'first_name', 'last_name', 'cust_id'], 'email_first_name_last_name_cust_id');
            $table->index(['first_name', 'last_name', 'cust_id'], 'first_name_last_name_cust_id_idx');
            $table->fullText(['first_name', 'last_name'], 'first_name_last_name_fulltext_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};

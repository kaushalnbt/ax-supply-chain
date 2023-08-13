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
        Schema::create('us_zips', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('zip', 100)->index('indx_zip');
            $table->string('lat', 100)->nullable();
            $table->string('lng', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state_id', 100)->nullable();
            $table->string('state_name', 100)->nullable();
            $table->string('zcta', 100)->nullable();
            $table->string('parent_zcta', 100)->nullable();
            $table->string('population', 100)->nullable();
            $table->string('density', 100)->nullable();
            $table->string('county_fips', 100)->nullable();
            $table->string('county_name', 100)->nullable();
            $table->string('county_weights', 500)->nullable();
            $table->string('county_names_all', 250)->nullable();
            $table->string('county_fips_all', 250)->nullable();
            $table->string('imprecise', 100)->nullable();
            $table->string('military', 100)->nullable();
            $table->string('timezone', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('us_zips');
    }
};

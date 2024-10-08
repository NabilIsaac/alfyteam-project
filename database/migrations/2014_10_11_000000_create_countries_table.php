<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('capital')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('country_code')->nullable();
            $table->string('currency')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('currency_sub_unit')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->string('currency_decimals')->nullable();
            $table->string('full_name')->nullable();
            $table->string('iso_3166_2')->nullable();
            $table->string('iso_3166_3')->nullable();
            $table->string('name')->nullable();
            $table->string('region_code')->nullable();
            $table->string('sub_region_code')->nullable();
            $table->string('eea')->nullable();
            $table->string('calling_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}

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
        Schema::create('weather', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->integer('zip_code');
            $table->integer('current_temp');
            $table->integer('day1_temp')->nullable();
            $table->integer('day2_temp')->nullable();
            $table->integer('day3_temp')->nullable();
            $table->integer('day4_temp')->nullable();
            $table->integer('day5_temp')->nullable();
            $table->integer('day6_temp')->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather');
    }
};
 
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
        Schema::create('search_info', function (Blueprint $table) {
            $table->id();
            //campos "created_at y "updated_at"
            $table->timestamps();
            //campos que querremos guardar en la base de datos
            $table->string('name');
            $table->string('zip_code');
            $table->integer('current_temp');
            $table->integer('day1_temp');
            $table->integer('day2_temp');
            $table->integer('day3_temp');
            $table->integer('day4_temp');
            $table->integer('day5_temp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_info');
    }
};

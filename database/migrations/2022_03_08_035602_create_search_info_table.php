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
            $table->string('name',60);
            $table->string('zip_code',5)->unique();
            $table->float('current_temp',4,2);
            $table->float('day1_temp',4,2);
            $table->float('day2_temp',4,2);
            $table->float('day3_temp',4,2);
            $table->float('day4_temp',4,2);
            $table->float('day5_temp',4,2);
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

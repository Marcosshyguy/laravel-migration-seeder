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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 50);
            $table->string('starting_station', 100);
            $table->string('arriving_station', 100);
            $table->time('starting_hour');
            $table->time('arriving_hour');
            $table->date('train_date');
            $table->string('train_code', 10);
            $table->tinyInteger('train_wagon');
            $table->boolean('on_time')->dropColumn();
            $table->boolean('canceled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};

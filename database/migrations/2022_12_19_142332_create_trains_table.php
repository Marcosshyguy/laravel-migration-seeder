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
            $table->date('starting_hour', 100);
            $table->date('arriving_hour', 100);
            $table->string('train_code', 10);
            $table->tinyInteger('train_vagon');
            $table->string('on_time', 3);
            $table->string('canceled', 10);
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

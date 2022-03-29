<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiniHouseBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mini_house_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mini_house_id')->references('id')->on('mini_houses');
            $table->foreignId('package_id')->references('id')->on('packages');
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
        Schema::dropIfExists('mini_house_bookings');
    }
}

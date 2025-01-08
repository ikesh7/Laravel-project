<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Amenityhotelmodel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('amnity_hotel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amenity_id');
            $table->foreignId('hotel_id');
            $table->timestamp('time_stamp');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amnity_hotel');
    }
}

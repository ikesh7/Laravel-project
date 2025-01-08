<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookingDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id');
            $table->integer('price');
            $table->foreignId('room_id');
            $table->foreignId('agentId');
            $table->integer('no_of_guest_adult');
            $table->integer('no_of_guest_children');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('check_in');
            $table->date('check_out');
            $table->timestamps();
            $table->ipAddress('ipaddress')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_details');
    }
}

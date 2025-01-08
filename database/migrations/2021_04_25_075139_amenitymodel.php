<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AmenityModel   extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #table name
        Schema::create('amenity', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('description_en');
            $table->integer('price');
           
        });
    }

    /**
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenity');
    }
}


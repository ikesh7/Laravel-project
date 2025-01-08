<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SearchResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_results', function (Blueprint $table) {

            $table->id();
            $table->string('city');
            $table->date('date_of_arrival');
            $table->date('date_of_departure');
            $table->integer('pax');
            $table->integer('capacity_adult')->nullable();
            $table->integer('capacity_child')->nullable();
            $table->string('nationality');

            $table->string('description_en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_results');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {

            $table->id();
            $table->foreignId('property_type_id')->references('id')->on('property_types');
            $table->string('name_of_property');
            $table->text('details')->nullable();
            $table->string('star_rating');
            $table->string('contact_name');
            $table->string('contact_no');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('address');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->boolean('is_active')->default(1);
            $table->string('slug')->index()->unique();
            $table->timestamp('verified_at')->nullable();
            $table->foreignId('verified_by')->references('id')->on('users');
            $table->string('image')->nullable();
            $table->longText('registration_document')->nullable();
            $table->longText('citizen_front')->nullable();
            $table->longText('citizen_back')->nullable();
            $table->decimal('long', 10, 7)->nullable();
            $table->decimal('lat', 10, 7)->nullable();
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
        Schema::dropIfExists('hotels');
    }
}

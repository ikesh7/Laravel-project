<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblFormInputs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_forms_inputs', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->string('input_type');
            $table->string('form_section');
            $table->longtext('option_values');
            $table->string('required');
            $table->longText('others');

            $table->foreignId('userid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

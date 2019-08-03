<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->bigInteger('programme_id')->unsigned();
            $table->bigInteger('subject_id')->unsigned();
            $table->primary(['programme_id','subject_id']);


            $table->foreign('programme_id')->references('programme_id')->on('programmes');
            $table->foreign('subject_id')->references('subject_id')->on('subjects');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('structures');
    }
}

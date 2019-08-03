<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_lists', function (Blueprint $table) {
            $table->bigInteger('curriculum_id')->unsigned();
            $table->bigInteger('campus_id')->unsigned();
            $table->primary(['curriculum_id', 'campus_id']);

            $table->foreign('curriculum_id')->references('curriculum_id')->on('curriculum');

            $table->foreign('campus_id')->references('campus_id')->on('campuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_lists');
    }
}

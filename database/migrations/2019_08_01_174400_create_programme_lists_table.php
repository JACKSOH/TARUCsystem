<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_lists', function (Blueprint $table) {
            $table->bigInteger('programme_id')->unsigned();
            $table->bigInteger('campus_id')->unsigned();
            $table->primary(['programme_id','campus_id']);
            $table->foreign('programme_id')->references('programme_id')->on('programmes');
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
        Schema::dropIfExists('programme_lists');
    }
}

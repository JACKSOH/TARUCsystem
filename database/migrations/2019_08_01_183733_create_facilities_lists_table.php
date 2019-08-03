<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities_lists',
            function (Blueprint $table) {
                $table->bigInteger('facility_id')->unsigned();
                $table->bigInteger('campus_id')->unsigned();
                $table->primary(['facility_id', 'campus_id']);

                $table->foreign('facility_id')->references('facility_id')->on('facilities');

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
        Schema::dropIfExists('facilities_lists');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_lists', function (Blueprint $table) {
            $table->bigInteger('level_of_study_id')->unsigned();
            $table->bigInteger('loan_id')->unsigned();
            $table->primary(['level_of_study_id','loan_id']);
            $table->double('amount');
            $table->foreign('level_of_study_id')->references('level_of_study_id')->on('level_of_studies');
            $table->foreign('loan_id')->references('loan_id')->on('loans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_lists');
    }
}

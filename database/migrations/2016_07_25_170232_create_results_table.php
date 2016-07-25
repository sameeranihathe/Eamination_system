<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('reg_no');
            $table->string('course_id');
            $table->string('result')->nullable();
            $table->string('assignment_marks');
            $table->string('paper_marks');
            $table->string('gpa');
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
        Schema::drop('results');
    }

}

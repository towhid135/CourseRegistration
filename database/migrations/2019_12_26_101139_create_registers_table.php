<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
          //$table->bigIncrements('id');
          //$table->timestamps();
          $table->engine = 'InnoDB';
          $table->string('studentName');
          $table->unsignedInteger('studentID');
          $table->foreign('studentID')->references('studentID')->on('students')->onDelete('cascade');
          $table->string('courseName');
          $table->string('courseID');
          $table->foreign('courseID')->references('CourseID')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}

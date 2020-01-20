<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
          //$table->bigIncrements('id');
          //$table->timestamps();
          $table->engine = 'InnoDB';
          $table->string('CourseName');
          $table->string('CourseID');
          $table->primary('CourseID');
          $table->double('Credit', 3, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

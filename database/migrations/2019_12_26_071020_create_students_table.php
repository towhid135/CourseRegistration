<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            //$table->bigIncrements('id');
            //$table->timestamps();
            $table->engine = 'InnoDB';
            $table->string('studentName');
            $table->unsignedInteger('studentID');
            $table->primary('studentID');
            $table->string('department');
            $table->string('semester');
            $table->string('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

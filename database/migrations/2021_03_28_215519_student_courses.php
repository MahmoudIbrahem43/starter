<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentscourses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('studentId');
            $table->unsignedBigInteger('courseId');
            $table->foreign('studentId')->references('id')->on('students');
            $table->foreign('courseId')->references('id')->on('courses');
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
        Schema::dropIfExists('studentscourses');
    }
}

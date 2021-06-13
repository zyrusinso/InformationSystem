<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('students'); 
            $table->integer('peh')->nullable();
            $table->integer('web_dev')->nullable();
            $table->integer('entrep')->nullable();
            $table->integer('phy_sci')->nullable();
            $table->integer('multimedia')->nullable();
            $table->integer('work_immerson')->nullable();
            $table->integer('rp')->nullable();
            $table->integer('mil')->nullable();
            $table->string('grading');
            $table->timestamps();
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_grades');
    }
}

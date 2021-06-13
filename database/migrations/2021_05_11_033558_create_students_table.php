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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->bigInteger('lrn');
            $table->bigInteger('stud_num')->unique;
            $table->string('date_of_birth');
            $table->integer('age');
            $table->string('section');
            $table->string('gender')->nullable;
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city');
            $table->bigInteger('contact_num');
            $table->string('pass');
            $table->string('role')->default('null');
            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
}

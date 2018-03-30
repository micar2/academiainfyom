<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher')->unsigned();
            $table->string('name');
            $table->integer('category')->unsigned();
            $table->string('start', 20);
            $table->string('duration', 20);
            $table->string('students_max', 10);
            $table->string('price', 10);
            $table->timestamps();
            $table->rememberToken();
            $table->softDeletes();
            $table->foreign('teacher')->references('id')->on('users');
            $table->foreign('category')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subjects');
    }
}

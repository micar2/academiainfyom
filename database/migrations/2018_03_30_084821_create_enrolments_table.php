<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnrolmentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student')->unsigned();
            $table->integer('subject')->unsigned();
            $table->integer('paid', false, true);
            $table->timestamps();
            $table->rememberToken();
            $table->softDeletes();
            $table->foreign('student')->references('id')->on('users');
            $table->foreign('subject')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enrolments');
    }
}

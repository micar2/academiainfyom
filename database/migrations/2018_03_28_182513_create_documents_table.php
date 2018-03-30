<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->string('tipe', 20);
            $table->string('visibility', 20);
            $table->text('content');
            $table->integer('category')->unsigned();
            $table->integer('user')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category')->references('id')->on('categories');
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documents');
    }
}

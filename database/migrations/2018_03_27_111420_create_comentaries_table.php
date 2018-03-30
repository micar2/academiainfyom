<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComentariesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->text('content');
            $table->integer('post_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentaries');
    }
}

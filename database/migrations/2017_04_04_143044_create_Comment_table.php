<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Comment', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->nullable();
          $table->string('email')->nullable();
          $table->boolean('isSuccess')->default(0);
          $table->string('comment');
          $table->integer('rate');
          $table->integer('like')->default(0);
          $table->integer('idMonan')->unsigned();

          $table->timestamps();


          $table->foreign('idMonan')->references('id')->on('DSMonan');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comment');
    }
}

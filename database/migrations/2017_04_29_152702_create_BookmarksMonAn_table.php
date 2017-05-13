<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookmarksMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('BookmarksMonan', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('createby')->unsigned();
          $table->integer('idMonan')->unsigned();

          $table->unique(['createby', 'idMonan']);
          $table->foreign('createby')->references('id')->on('users');
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
      Schema::dropIfExists('BookmarksMonan');
    }
}

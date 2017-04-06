<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDungcuMonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('DungcuMonan', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idMonan')->unsigned();
          $table->integer('idDungcu')->unsigned();

          $table->foreign('idDungcu')->references('id')->on('DSDungcu');
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
        Schema::dropIfExists('DungcuMonan');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDSMonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('DSMonan', function (Blueprint $table) {
          $table->increments('id');
          $table->string('tenMonan')->unique();
          $table->integer('level')->nullable();
          $table->string('nhaTaitro')->nullable();
          $table->string('gioithieu');
          $table->string('hinhMinhhoa');
          $table->string('origin')->nullable();
          $table->string('thoigian')->nullable();
          $table->string('dokho')->nullable();
          $table->string('video')->nullable();
          $table->string('huongdan');
          $table->string('hits')->default(0);
          $table->boolean('publish')->default(0);
          $table->integer('createby')->unsigned();
          $table->timestamps();


          $table->foreign('createby')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DSMonan');
    }
}

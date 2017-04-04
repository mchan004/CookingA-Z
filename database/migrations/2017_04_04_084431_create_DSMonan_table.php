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
          $table->string('tenMonan');
          $table->string('gioithieu');
          $table->string('hinhMinhhoa');
          $table->integer('nguyenlieu');
          $table->string('origin');
          $table->string('thoigian');
          $table->string('dokho');
          $table->string('video');
          $table->string('huongdan');
          $table->integer('createby');
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

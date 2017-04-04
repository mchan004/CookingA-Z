<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguyenlieuMonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('NguyenlieuMonan', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idMonan');
          $table->float('soluong');
          $table->string('donvi');
          $table->string('idNguyenlieu');

          $table->foreign('idNguyenlieu')->references('id')->on('DSNguyenlieu');
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
        Schema::dropIfExists('NguyenlieuMonan');
    }
}

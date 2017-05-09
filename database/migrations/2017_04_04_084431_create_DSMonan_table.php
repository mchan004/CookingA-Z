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
          $table->integer('categorie')->unsigned();
          $table->integer('level')->default(1);
          $table->string('nhaTaitro')->nullable();
          $table->mediumText('gioithieu');
          $table->string('hinhMinhhoa');
          $table->char('origin', 2)->default('na');
          $table->integer('thoigian')->nullable();
          $table->integer('dokho')->nullable();
          $table->string('video')->nullable();
          $table->longText('huongdan');
          $table->string('nguon')->nullable();
          $table->string('hits')->default(0);
          $table->boolean('publish')->default(0);
          $table->integer('createby')->unsigned();
          $table->timestamps();

          $table->foreign('categorie')->references('id')->on('Categories');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDSNguyenlieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('DSNguyenlieu', function (Blueprint $table) {
          $table->increments('id');
          $table->string('tenNguyenlieu')->unique();
          $table->string('group')->nullable();
          $table->boolean('publish')->default(0);
          $table->string('english')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DSNguyenlieu');
    }
}

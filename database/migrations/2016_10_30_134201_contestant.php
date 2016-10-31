<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contestant extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('contestants', function (Blueprint $table) {
          $table->increments('id');
          $table->string('code')->unique();
          $table->string('name');
          $table->string('adres');
          $table->string('woonplaats');
          $table->string('ip');
          $table->timestamps();
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('contestants');
  }
}

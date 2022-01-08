<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Basvurulars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('basvurus', function (Blueprint $table) {
          $table->id();
          $table->string('öğrencino',"")->nullable();
          $table->string('çap',"")->nullable();
          $table->string('yazokulu',"")->nullable();
          $table->string('intibak',"")->nullable();
          $table->string('yataygeçiş',"")->nullable();
          $table->string('dikeygeçiş',"")->nullable();
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
        Schema::dropIfExists('basvurular');
    }
}

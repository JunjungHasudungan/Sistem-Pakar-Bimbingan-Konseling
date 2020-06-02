<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konselling', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bimbingan_id')->unsigned();
            $table->integer('permasalahan_id')->unsigned();
            $table->foreign('bimbingan_id')->references('id')->on('bimbingan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('permasalahan_id')->references('id')->on('permasalahan')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('konselling');
    }
}

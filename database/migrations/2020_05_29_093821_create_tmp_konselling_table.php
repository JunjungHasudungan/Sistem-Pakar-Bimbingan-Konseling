<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpKonsellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmpKonselling', function (Blueprint $table) {
            $table->unsignedInteger('bimbingan_id')->nullable();
            $table->unsignedInteger('permasalahan_id')->nullable();
            $table->unsignedInteger('gejala')->nullable();
            $table->foreign('bimbingan_id')->references('id')->on('bimbingan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('permasalahan_id')->references('id')->on('permasalahan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmpKonselling');
    }
}

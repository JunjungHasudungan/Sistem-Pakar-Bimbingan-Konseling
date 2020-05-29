<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasePengetahuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basePengetahuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('kodeBasePengetahuan');
            $table->integer('permasalahan_id')->unsigned();
            $table->integer('gejala_id')->unsigned();
            $table->timestamps();

            $table->foreign('permasalahan_id')
                  ->references('id')
                  ->on('permasalahan')
                  ->onDelete('cascade');
            
            $table->foreign('gejala_id')
                  ->references('id')
                  ->on('gejala')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basePengetahuan');
    }
}

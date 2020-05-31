<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpGejalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmpGejala', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bimbingan_id')->unsigned();
            $table->integer('gejala_id')->unsigned();

            $table->foreign('bimbingan_id')
                  ->references('id')
                  ->on('bimbingan')
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
        Schema::dropIfExists('tmpGejala');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivingroomDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livingroom_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('temperature')->unsigned(); // unsigned forces the value to be +ve
            $table->integer('light')->unsigned();
            $table->string('timeString');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livingroom_datas');
    }
}

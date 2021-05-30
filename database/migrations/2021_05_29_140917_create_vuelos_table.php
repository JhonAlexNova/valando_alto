<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_piloto');
            $table->foreignId('id_copiloto');
            $table->foreignId('id_origen');
            $table->foreignId('id_destino');
            $table->string('precio');

            $table->foreign('id_piloto')->references('id')->on('users');
            $table->foreign('id_copiloto')->references('id')->on('users');
            $table->foreign('id_origen')->references('id')->on('lugar');
            $table->foreign('id_destino')->references('id')->on('lugar');
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
        Schema::dropIfExists('vuelo');
    }
}

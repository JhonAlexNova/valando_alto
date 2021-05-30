<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_avion');
            $table->string('numero_pasajeros');
             $table->string('identificacion_avion');
            $table->foreign('id_tipo_avion')->references('id')->on('tipo_avion'); 
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
        Schema::dropIfExists('avion');
    }
}

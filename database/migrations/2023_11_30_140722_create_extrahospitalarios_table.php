<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtrahospitalariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrahospitalarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('idformulario')->nullable();
            $table->string('fechauso')->nullable();
            $table->string('nombrecompleto')->nullable();
            $table->string('nombrepersonaatendida')->nullable();
            $table->string('tipodocumento')->nullable();
            $table->string('numerodocumento')->nullable();
            $table->string('edad')->nullable();
            $table->string('sexo')->nullable();
            $table->string('etnia')->nullable();
            $table->string('orientacionsexual')->nullable();
            $table->string('identidadgenero')->nullable();
            $table->string('condiciondiscapacidad')->nullable();
            $table->string('poblacionvictima')->nullable();
            $table->string('habitanzacalle')->nullable();
            $table->string('poblacioncampesino')->nullable();
            $table->string('direccion')->nullable();
            $table->string('departamento')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('nivelescolaridad')->nullable();
            $table->string('estratosocioeconomico')->nullable();
            $table->string('tiporegimenafiliacion')->nullable();
            $table->string('idusuario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extrahospitalarios');
    }
}

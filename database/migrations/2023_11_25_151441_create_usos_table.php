<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("uso_fechaevento")->nullable();
            $table->string("uso_nombrelugarevento")->nullable();
            $table->string("uso_personaatenidadeventonombre")->nullable();
            $table->string("uso_personaatenidadeventotipodocumento")->nullable();
            $table->string("uso_personaatenidadeventonumerodocumento")->nullable();
            $table->integer("uso_personaatenidadeventoedad")->nullable();
            $table->string("uso_personaatenidadeventosexo")->nullable();
            $table->string("uso_personaatenidadeventoaseguradorsalud")->nullable();
            $table->string("uso_datoseventonombrepersonautorizodea")->nullable();
            $table->string("uso_datoseventotipodocumento")->nullable();
            $table->string("uso_datoseventonumerodocumento")->nullable();
            $table->string("uso_datoseventotelefono")->nullable();
            $table->string("uso_datoseventohorainicioevento")->nullable();
            $table->string("uso_datoseventohoraactivacioncadenasupervivencia")->nullable();
            $table->string("uso_datoseventohorautlizaciondea")->nullable();
            $table->string("uso_datoseventohoratrasladopersonaatendida")->nullable();
            $table->string("uso_datosmediotransportenombreenccargado")->nullable();
            $table->string("uso_datosmediotransportemediotransporte")->nullable();
            $table->string("uso_datosmediotransporteempresaambulancia")->nullable();
            $table->string("uso_datosmediotransporteobservaciones")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proyecto');
            $table->text('descripcion');
            $table->text('imagen_proyecto');
            $table->string('nombre_equipo1');
            /**
             * ESTABLECEMOS LA RELACION CON LA TABLA EQUIPOS, EL PROYECTO POR EL MOMENTO SOLO SE PODRA
             * HACER CON 2 EQUIPOS, POR LO QUE COMO EN EL CASO DE EQUIPOS, EL EQUIPO CREADOR SERA EL
             * EQUIPO ENCARGADO (O EL QUE SOLICITA LOS SERVICIOS QUE OFRECE EL OTRO EQUIPO)
             */
            $table->unsignedBigInteger('nombre_equipo_creador');
            $table->foreign('nombre_equipo_creador')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};

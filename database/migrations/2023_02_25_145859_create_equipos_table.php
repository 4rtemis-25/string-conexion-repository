<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_equipo');
            $table->string('nombre_integrante1');
            $table->string('nombre_integrante2');
            $table->string('nombre_integrante3');
            $table->text('servicios_ofrecidos');
            $table->tinyInteger('diponibilidad')->default(0)->comment('0: No disponible, 1: Si disponible');
            /**
             * CREAMOS UNA RELACION CON LA TABLA DE USERS PARA TRAER EL CORREO ELECTRONICO DEL USUARIO,
             * PARA QUE ESTE SEA VISIBLE (USUARIO CREADOR DEL EQUIPO), 
             * MAS ADELANTE SE PUEDE DEJER COMO UN BOTON QUE LLEVE AL CORREO
             */
            $table->unsignedBigInteger('correo_usuario_creador');
            $table->foreign('correo_usuario_creador')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};

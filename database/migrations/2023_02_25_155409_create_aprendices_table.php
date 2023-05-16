<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->id();
            $table->text('foto_perfil');
            $table->text('habilidades');
            $table->string('tipo_documento', 10);
            $table->string('numero_documento');
            $table->string('numero_telefono');
            $table->string('direccion');
            /**
             * A PARTIR DE AQUI VAMOS A CREAR LOS CAMPOS QUE VAN A ESTABLECER LA RELACION CON LAS TABLAS:
             * CADENAS, PROGRAMAS Y USERS
             */
            $table->unsignedBigInteger('cadena_id');
            $table->unsignedBigInteger('programa_id');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('cadena_id')->references('id')->on('cadenas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('programa_id')->references('id')->on('programas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('usuario_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendices');
    }
};

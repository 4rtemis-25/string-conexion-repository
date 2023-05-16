<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_programa');
            $table->string('ficha_programa');
            //CREAMOS LA RELACION CON LA TABLA CADENAS
            $table->unsignedBigInteger('cadena_id');
            $table->foreign('cadena_id')->references('id')->on('cadenas')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};

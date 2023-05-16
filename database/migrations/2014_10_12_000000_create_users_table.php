<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        /**
         * COMO ESTA ES LA TABLA DEL LOGIN LA VAMOS A DEJAR SIN CRUD PARA QUE SOLO EL ADMIN PUEDA TENER PERMISOS
         * PARA ELIMINAR Y EDITAR LA INFORMACION QUE POR LO GENERAL ES CONSTRANTE COMO EL CORREO SOY SENA
         * Y LOS NOMBRES COMPLETOS, POR LO CUAL VAMOS A RELACIONAR ESTA TABLA CON OTRA LLAMADA APRENDICES
         */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

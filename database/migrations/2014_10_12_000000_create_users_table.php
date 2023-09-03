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
        Schema::create('usuarios', function (Blueprint $table){
            $table->id('id');
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('encargados', function (Blueprint $table){
            $table->id('id');
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('password');
            $table->string('no_empleado');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('proyectos', function (Blueprint $table){
            $table->id('id');
            $table->string('nombre');
            $table->string('empresa');
            $table->string('departamento');
            $table->string('nivel_academico');
            $table->text('descripcion');
            $table->string('ubicacion');
            $table->dateTime('horario_incio');
            $table->dateTime('horario_fin');
            $table->text('fespeciales'); /* Funciones especiales que describe el empleado*/
            $table->enum('estado', ['disponible', 'no_disponible']);
            $table->unsignedBigInteger('id_encargado');
            $table->foreign('id_encargado')->references('id')->on('encargados');
            $table->timestamps();
        });
        Schema::create('solicitudes', function (Blueprint $table){
            $table->id('id');
            $table->string('nombre');
            $table->smallInteger('edad');
            $table->enum('sexo', ['masculino', 'femenino', 'indefinido']);
            $table->string('nivel_academico');
            $table->string('universidad');
            $table->string('no_telefono');
            $table->string('correo');
            $table->timestamp('fecha');
            $table->double('estado');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->unsignedBigInteger('id_proyecto');
            $table->foreign('id_proyecto')->references('id')->on('proyectos');
            $table->timestamps();
        });
        Schema::create('administradores', function (Blueprint $table){
            $table->id('id');
            $table->string('nombre');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('encargados');
        Schema::dropIfExists('proyectos');
        Schema::dropIfExists('solicitudes');
        Schema::dropIfExists('administradores');
    }
};

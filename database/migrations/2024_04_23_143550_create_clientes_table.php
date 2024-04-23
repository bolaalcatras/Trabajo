<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('primernombre')->nullable();
            $table->string('segundonombre')->nullable();
            $table->string('primerapellido')->nullable();
            $table->string('segundoapellido')->nullable();
            $table->enum('Tipodedocumento',["Cedula de ciudadania","Registro civil","Cedula extrangera","Tarjeta de dentidad"])->nullable();
            $table->date('Fechadenacimiento')->nullable();
            $table->string('NumeroIdentificacion')->nullable();
            $table->enum('Genero',["Masculino","Femenino","Otro"])->nullable();
            $table->string('Direccion', 255)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }

};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pqrsds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
            $table->string('correo_electronico')->nullable();
            $table->enum('es_anonima',["true","false"])->nullable();
            $table->enum('tipo_de_pqrsd',["peticion","queja","reclamo","solicitud","denuncia"])->nullable();
            $table->enum('tipo_de_persona',["normal","juridica","apoderado"])->nullable();
            $table->text('descripcion')->nullable();
            $table->string('url_pdf')->nullable();
            $table->enum('estado',["enviado","enproceso","resuelto"])->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pqrsds');
    }
};
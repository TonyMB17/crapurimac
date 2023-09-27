<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('denuncia', function(Blueprint $table){
            $table->id();
            $table->string('dni');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo');
            $table->string('denunciado');
            $table->string('institucion');
            $table->string('cargo');
            $table->date('fecha');
            $table->text('descripcion');
            $table->text('testigos');
            $table->string('file');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncia');
    }
};

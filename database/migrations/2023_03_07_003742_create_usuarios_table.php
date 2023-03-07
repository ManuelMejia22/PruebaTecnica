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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('email',100);
            $table->string('telefono', 50);
            $table->enum('rol', array('E', 'P'));
            $table->enum('moderador', array('Y', 'N'));
            $table->timestamps();
            $table->foreignId('asignatura_id')->constraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

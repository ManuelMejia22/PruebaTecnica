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
        Schema::create('preguntas', function (Blueprint $table) {

            $table->bigIncrements('id')->unsigned();
            $table->string('pregunta')->nulleable();
            $table->integer('calificacion')->nullable()->default(0);
            $table->timestamps();
            $table->foreignId('asignatura_id')->constraints();
            $table->foreignId('usuario_id')->constraints()->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};

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
        Schema::create('curso_estudiantes', function (Blueprint $table) {
            $table->id("id_curso_estudiante");
            $table->unsignedBigInteger("curso_id");
            $table->unsignedBigInteger("estudiante_id");

            /// relacionamos las tablas

            $table->foreign("curso_id")
            ->references("id_curso")->on("cursos")
            ->onDelete("cascade");

            $table->foreign("estudiante_id")
            ->references("id_estudiante")->on("estudiantes")
            ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_estudiantes');
    }
};

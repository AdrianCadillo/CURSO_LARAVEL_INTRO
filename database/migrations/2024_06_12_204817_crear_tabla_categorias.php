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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id("id_categoria");// id | unsigned | auto_increment| bigInteger
            $table->string("nombre_categoria",60);
            $table->text("descripcion")->nullable();
            $table->timestamps();/// fecha y hora de creacion y actualizacion 
            /// created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
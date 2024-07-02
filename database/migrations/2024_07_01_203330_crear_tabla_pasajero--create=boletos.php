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
        //
        Schema::create("boletos",function(Blueprint $table){
         $table->id("id_boleto");
         $table->char("num_boleto",10);
         $table->float("importe");

         $table->unsignedBigInteger("pasajero_id");

         $table->foreign("pasajero_id")
         ->references("id_pasajero")->on("pasajeros");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        Schema::table('facultades', function (Blueprint $table) {
            // eliminación
            $table->softDeletes("eliminado_facultad")->after("estado");/// soft_delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('facultades', function (Blueprint $table) {
            //
            $table->dropColumn("eliminado_facultad");
        });
    }
};

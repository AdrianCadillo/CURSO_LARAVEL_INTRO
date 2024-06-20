<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       // DB::unprepared("DROP FUNCTION IF EXISTS funcion1");

        DB::unprepared("CREATE FUNCTION funcion1() returns varchar(50)
        begin
        declare variable varchar(50) default '';

        set variable = 'Creando mi primera funcion en laravel';

        return variable;
        
        end ;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::unprepared("DROP FUNCTION funcion1");
    }
};

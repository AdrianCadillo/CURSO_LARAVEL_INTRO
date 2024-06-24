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
    protected $connection = "tienda_ropas";
    public function up(): void
    {
        
        DB::unprepared("DROP PROCEDURE IF EXISTS todousers");

        DB::unprepared("CREATE PROCEDURE todousers(idusuario int)
        BEGIN
         select *from users where id=idusuario;
        END ;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::unprepared("DROP PROCEDURE todousers");
    }
};

<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vamos a crear 5 tipos
        $tipos = [
            [
               "categoria_nombre" => "BEBIDAS",
               "precio" => 20,
               "descripcion" => "descripcion de prueba 1" 
            ],
            [
                "categoria_nombre" => "TECNOLOGIA",
                "precio" => 120,
                "descripcion" => "descripcion de prueba 2" 
            ],
            [
                "categoria_nombre" => "COMIDAS",
                "precio" => 50,
                "descripcion" => "descripcion de prueba 3" 
            ],
            [
                "categoria_nombre" => "TIPO 4",
                "precio" => 10,
                "descripcion" => "descripcion de prueba 4" 
            ],
            [
                "categoria_nombre" => "TIPO 5",
                "precio" => 110,
                "descripcion" => "descripcion de prueba 5" 
             ]
        ];

        ///DB::table('tipos')->insert($tipos);

        $tipo6 = Tipo::create([
               "categoria_nombre" => "categoria nueva",
               "precio" =>12,
               "descripcion" => "descripcion de prueba 6" 
        ]);

        // producto 1
        $producto1 = Producto::create([
            "nombre_producto" => "producto14",
            "descripcion" => "descripcion de prueba",
            "precio" => 9.80,
            "stock" => 56,
            "categoria_id" => $tipo6->id_categoria
        ]);

    }
}

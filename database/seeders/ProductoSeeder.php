<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
         Producto::create([
            "nombre_producto" => "producto121",
            "descripcion" => "descripcion de prueba",
            "precio" => 9.80,
            "stock" => 56,
            "categoria_id" => 5
        ]);
    }
}

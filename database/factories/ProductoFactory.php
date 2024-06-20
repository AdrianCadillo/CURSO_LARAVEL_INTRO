<?php

namespace Database\Factories;

use App\Models\Tipo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           "nombre_producto" => $this->faker->words(2, true),
            "descripcion" => $this->faker->paragraph(2),
            "precio" => $this->faker->randomFloat(2, 20, 30),
            "stock" => $this->faker->randomNumber(2, true),
            ///"categoria_id" => Tipo::inRandomOrder()->first()->id_categoria
        ];
    }
}

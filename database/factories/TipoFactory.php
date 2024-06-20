<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tipo>
 */
class TipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
               "categoria_nombre" => $this->faker->word(),
               "precio" => $this->faker->randomFloat(2, 40, 70),
               "descripcion" => $this->faker->paragraph() 
        ];
    }
}

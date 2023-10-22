<?php

namespace Database\Factories;

use App\Models\Catedral;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CatedralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence($nbWords = 3, $variableNbWords = true);
        return [
            'name' => $name,
            'resumen' =>$this->faker->paragraph(),
            'status' =>$this->faker->randomElement([Catedral::BORRADOR,Catedral::REVISION,Catedral::PUBLICADO]),
            'slug' => Str::slug($name),
            'categoria' => $this->faker->randomElement([Catedral::HOME,Catedral::FACHADAS,Catedral::CAPILLAS,Catedral::OTROS,Catedral::PORTICO,Catedral::MUSEO]),
            'historia' => $this->faker->paragraph(),
            'mensaje' => $this->faker->sentence(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Catedral;
use Illuminate\Database\Eloquent\Factories\Factory;


class CatedralFotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order = 1;
        return [
            'piefoto' => 'Populate DB Pie de Foto',
            'url' => 'fotos/'. $this->faker->image('public/storage/fotos',950,600,null,false),
            'alt' => $this->faker->name(),
            'nombreFoto' => "POPULATEDB",
            'catedral_id' => 1, /* Catedral::all()->random()->id, */
            'orden' => $order++
        ];
    }
}

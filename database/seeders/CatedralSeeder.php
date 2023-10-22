<?php

namespace Database\Seeders;

use App\Models\Catedral;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CatedralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'Catedral de Santiago de Compostela';
        Catedral::create([
            'name' => $name,
            'orden' =>1,
            'resumen' =>"POPULATE DB RESUMEN",
            'status' => Catedral::PUBLICADO,
            'slug' => Str::slug($name),
            'categoria' => Catedral::HOME,
            'prefijoH1' => 'Historia de la ',
            'historia' =>'POPULATE DB HISTORIA',
            'mensaje' => 'Populate DB Mensaje'
        ]);



    }
}

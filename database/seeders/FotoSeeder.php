<?php

namespace Database\Seeders;
use App\Models\CatedralFoto;

use Illuminate\Database\Seeder;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatedralFoto::factory(1)->create();



    }
}

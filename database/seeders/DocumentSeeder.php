<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::create([
            'tipo' => Document::LEGAL,
            'texto' => '',
        ]);

        Document::create([
            'tipo' => Document::PRIVACIDAD,
            'texto' => '',
        ]);

        Document::create([
            'tipo' => Document::COOKIES,
            'texto' => '',
        ]);
    }
}

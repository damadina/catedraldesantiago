<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Database\Factories\CategoriafotoFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()


    {
        /* Storage::makeDirectory('public/portadas');
        $files = Storage::allFiles('public/portadas');
        Storage::delete($files); */

        Storage::makeDirectory('public/fotos');
        $files = Storage::allFiles('public/fotos');
        Storage::delete($files);

        // \App\Models\User::factory(10)->create();
        $this->call(PermisionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DocumentSeeder::class);
        $this->call(CatedralSeeder::class);
        /* $this->call(FotoSeeder::class); */
        /* $this->call(CatedralReviewSeeder::class); */


    }
}

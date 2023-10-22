<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Ver dashboard',
        ]);
        Permission::create([
            'name' => 'Crear rol',
        ]);
        Permission::create([
            'name' => 'Listar rol',
        ]);
        Permission::create([
            'name' => 'Editar rol',
        ]);
        Permission::create([
            'name' => 'Eliminar rol',
        ]);
        Permission::create([
            'name' => 'Leer usuarios',
        ]);
        Permission::create([
            'name' => 'Editar usuarios',
        ]);

        Permission::create([
            'name' => 'Crear Catedral',
        ]);
        Permission::create([
            'name' => 'Leer Catedral',
        ]);
        Permission::create([
            'name' => 'Actualizar Catedral',
        ]);
        Permission::create([
            'name' => 'Eliminar Catedral',
        ]);



    }
}

<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleMakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'libelle' => 'superadmin',
            'description' => 'Super administrateur avec tous les privilèges',
        ]);

        Role::create([
            'libelle' => 'admin',
            'description' => 'Administrateur du site',
        ]);

        Role::create([
            'libelle' => 'simpleuser',
            'description' => 'Utilisateur simple',
        ]);
    }
}
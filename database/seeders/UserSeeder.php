<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "Hugo Sanchez",
                'email' => "soy.hugo.pe@gmail.com",
                'password' => bcrypt('123'),
                'role' => "administrador General"
            ],
            [
                'name' => "Pedro Rodenas",
                'email' => "pedroe@gmail.com",
                'password' => bcrypt('123'),
                'role' => "marketing"
            ],
            [
                'name' => "Daniel Calderón",
                'email' => "daniel@gmail.com",
                'password' => bcrypt('123'),
                'role' => "control de inventario"
            ],
            [
                'name' => "Carlos Ore",
                'email' => "carlos@gmail.com",
                'password' => bcrypt('123'),
                'role' => "gestor de ventas"
            ],
        ]);
    }
}

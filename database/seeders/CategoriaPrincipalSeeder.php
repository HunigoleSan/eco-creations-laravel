<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaPrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria_principals')->insert(
            [
                ['nomcatprin' => "Accesorios", 'created_at' => now(), 'updated_at' => now()],
                ['nomcatprin' => "Árticulos personalizados", 'created_at' => now(), 'updated_at' => now()],
                ['nomcatprin' => "Regalos", 'created_at' => now(), 'updated_at' => now()],
                ['nomcatprin' => "Artesanales", 'created_at' => now(), 'updated_at' => now()]
            ]
        );
    }
}

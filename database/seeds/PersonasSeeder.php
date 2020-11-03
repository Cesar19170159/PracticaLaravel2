<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Modelos\Persona;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Cesar Daniel',
            'apellido_p' => 'Caldera',
            'apellido_m' => 'Luna',
            'fecha_nac' => '12/06/01'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Juan Aldama',
            'apellido_p' => 'Villa',
            'apellido_m' => 'Juarez',
            'fecha_nac' => '01/05/12'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Mario',
            'apellido_p' => 'Mejia',
            'apellido_m' => 'Acosta',
            'fecha_nac' => '11/12/05'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Erick Adan',
            'apellido_p' => 'Ruiseco',
            'apellido_m' => 'Cisneros',
            'fecha_nac' => '06/06/06'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Luis Angel',
            'apellido_p' => 'Gutierrez',
            'apellido_m' => 'Hernandez',
            'fecha_nac' => '04/07/11'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Nadia',
            'apellido_p' => 'Caldera',
            'apellido_m' => 'Luna',
            'fecha_nac' => '03/06/01'
        ]);
    }
}

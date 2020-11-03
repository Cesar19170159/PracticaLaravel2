<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Modelos\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Flauta transversa',
            'tipo' => 'Musica',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pastel de Carne',
            'tipo' => 'Carnes',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Botella de Vino',
            'tipo' => 'Licores',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Piano de Cola',
            'tipo' => 'Musica',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Galletas Maria',
            'tipo' => 'Galletas',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Galletas Emperador',
            'tipo' => 'Galletas',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Vodka',
            'tipo' => 'Licores',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Salchicha Alemana',
            'tipo' => 'Carnes',
        ]);
    }
}

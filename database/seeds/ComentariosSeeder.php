<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Modelos\Comentario;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'titulo' => 'Gran Producto',
            'comentario' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, adipisci velit...',
            'persona_id' => '6',
            'producto_id'=>'1'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Excelente',
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'persona_id' => '2',
            'producto_id'=>'2'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Pesimo',
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'persona_id' => '3',
            'producto_id'=>'3'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Alabado sea el señor por este producto',
            'comentario' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
            'persona_id' => '5',
            'producto_id'=>'4'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Y esto es genial',
            'comentario' => 'Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. ipsum quia, adipisci velit...',
            'persona_id' => '2',
            'producto_id'=>'5'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Un Buen producto',
            'comentario' => 'Neque Lorem ipsum dolor sit amet. porro quisquam est qui dolorem ipsum quia, adipisci velit...',
            'persona_id' => '2',
            'producto_id'=>'6'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Como comento este producto',
            'comentario' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
            'persona_id' => '5',
            'producto_id'=>'5'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Agradecido con esto',
            'comentario' => 'Vesti la giubba e la faccia infarina. La gente paga e rider vuole qua.',
            'persona_id' => '3',
            'producto_id'=>'8'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Y Algo extraño',
            'comentario' => 'E se Arelcchin tinvola Colombina Ridi, Pagliaccio e ognun applaudir',
            'persona_id' => '4',
            'producto_id'=>'4'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Un magnifico producto',
            'comentario' => 'Tramuta in lazzi lo spasmo ed il pianto In una smorfia il singhiozzo e l dolor...',
            'persona_id' => '3',
            'producto_id'=>'6'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Demasiado pequeño',
            'comentario' => 'Ridi, Pagliaccio, sul tuo amore infranto, Ridi del duol che tavvelena il cor!',
            'persona_id' => '6',
            'producto_id'=>'7'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Agradezco por este producto',
            'comentario' => 'Neque porro quisquam est qui dolorem ipsum quia, adipisci velit...',
            'persona_id' => '1',
            'producto_id'=>'8'
        ]);
    }
}

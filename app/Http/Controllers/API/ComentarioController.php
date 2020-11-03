<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Comentario;
use App\Modelos\Persona;
use App\Modelos\Producto;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
    public function comentario($id=null){

        if ($id){

            $comentarios = DB::table('comentarios')
            ->join('personas', 'comentarios.persona_id', '=', 'personas.id')
            ->join('productos', 'comentarios.producto_id', '=', 'productos.id')
            ->select('personas.nombre as Usuario', 'productos.nombre as Producto', 'comentarios.titulo','comentarios.comentario')
            ->where('comentarios.id','=',$id)
            ->get();

            return response()->json(["Comentarios:"=>$comentarios],200);
        }
        $comentarios = DB::table('comentarios')
            ->join('personas', 'comentarios.persona_id', '=', 'personas.id')
            ->join('productos', 'comentarios.producto_id', '=', 'productos.id')
            ->select('comentarios.id as Id Comentario','personas.nombre as Usuario', 'productos.nombre as Producto', 'comentarios.titulo','comentarios.comentario')
            ->orderBy('comentarios.id','asc')
            ->get();

            return response()->json(["Comentarios:"=>$comentarios],200);
    }

    public function comentuser($id=null){

        if (Persona::find($id)){

            $comentarios = DB::table('comentarios')
            ->join('personas', 'comentarios.persona_id', '=', 'personas.id')
            ->join('productos', 'comentarios.producto_id', '=', 'productos.id')
            ->select('personas.nombre as Usuario', 'productos.nombre as Producto', 'comentarios.titulo','comentarios.comentario')
            ->where('personas.id','=',$id)
            ->get();

            return response()->json(["Comentarios del usuario:"=>$comentarios],200);
        }
        return response()->json(["No se encontro el usuario"],200);
    }

    public function comentproducto($id=null){

        if (Producto::find($id)){

            $comentarios = DB::table('comentarios')
            ->join('productos', 'comentarios.producto_id', '=', 'productos.id')
            ->join('personas', 'comentarios.persona_id', '=', 'personas.id')
            ->select('productos.nombre as Producto','personas.nombre as Usuario', 'comentarios.titulo','comentarios.comentario')
            ->where('productos.id','=',$id)
            ->get();

            return response()->json(["Comentarios del producto:"=>$comentarios],200);
        }
        return response()->json(["No se encontro el producto"],200);
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Comentario;
use App\Modelos\Persona;
use App\Modelos\Producto;

class ComentarioController extends Controller
{
    public function comentuser($id=null){
        $producto= new Producto();
        if (Persona::find($id)){

            $comentarios = $Comentarios::table(Comentario)
            ->join(Persona, 'comentarios.persona_id', '=', 'personas.id')
            ->join(Producto, 'comentarios.producto_id', '=', 'productos.id')
            ->select('personas.nombre', 'productos.nombre', 'comentarios.titulo','comentarios.comentario')
            ->where('personas.id','=',$id)
            ->get();

            return response()->json(["Comentarios del usuario"=>$comentarios],200);
        }
        return response()->json(["No se encontro el usuario"],200);
    }
}

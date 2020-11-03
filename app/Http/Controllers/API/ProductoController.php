<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Producto;

class ProductoController extends Controller
{
    public function index($id=null){
        if ($id){
            return response()->json(["Producto"=>Producto::find($id)],200);
        }
        return response()->json(["Productos"=>Producto::all()],200);
    }

    public function nuevo(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->tipo = $request->tipo;

        if($producto->save())
            return response()->json(["Producto"=>$producto],201);
        return response()->json(null,400);
        
    }
    public function eliminar($id=null){
        if (Producto::find($id)){
            Producto::find($id)->delete();
            return response()->json(["Producto Eliminado"],200);
        }
        return response()->json(["Producto No encontrado"],200);
        
    }
}

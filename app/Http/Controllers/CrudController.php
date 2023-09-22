<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CrudController extends Controller
{
   public function index()
    {
        $datos=DB::select(" select * from articulo");
        return view("welcome")->with("datos", $datos);
    } 
    
    
   
   public function create(Request $request)
   {
      
      try {
         $sql=DB::insert(" insert into articulo(cod_articulo,Titulo,procedencia,revista)values(?,?,?,?)",[
            $request->txtcodigo,
            $request->txtnombre,
            $request->txtprecio,
            $request->txtcantidad,
         ]);
      } catch (\Throwable $th) {
         $sql = 0;
      }
      
      if ($sql == true) {
         return back()->with("correcto","Artículo registrado correctamente");
      } else {
         return back()->with("incorrecto","error al registrar");
      }
   }

   public function update(Request $request)
   {
      
      try {
         $sql=DB::update(" update articulo set Titulo=?, procedencia=?, revista=? where cod_articulo=? ", [
            $request->txtnombre,
            $request->txtprecio,
            $request->txtcantidad,
            $request->txtcodigo,
         ]);
         if ($sql == 0) {
            $sql=1;
         }
      } catch (\Throwable $th) {
         $sql = 0;
      }
      
      if ($sql == true) {
         return back()->with("correcto","Artículo modificado correctamente");
      } else {
         return back()->with("incorrecto","error al modificar");
      }
   }

   public function delete($id)
   {
      try {
         $sql = DB::delete(" delete from articulo where cod_articulo=$id ");
         if ($sql == 0) {
            $sql=1;
         }
      } catch (\Throwable $th) {
         $sql = 0;
      }
      
   if ($sql == true) {
      return back()->with("correcto","Artículo eliminada correctamente");
   }   else   {
         return back()->with("incorrecto","error al eliminar");
      }

   }
}


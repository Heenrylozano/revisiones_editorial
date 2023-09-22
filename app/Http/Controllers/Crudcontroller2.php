<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crudcontroller2 extends Controller
{
    public function index()
    {
        $datos=DB::select(" select * from revisor");
        return view("revisor.index", ["revisores" => $datos]);
    }
    public function index2()
    {
        $datos2=DB::select(" SELECT Titulo, nombre, fecha_entrega FROM practica5.revision, practica5.articulo, practica5.revisor where cod_articulo = idarticulo and cod_revisor=idrevisor;");
        return view("revision.index", ["revisiones" => $datos2]);
    }
}

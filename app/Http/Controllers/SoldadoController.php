<?php

namespace App\Http\Controllers;
use App\Models\soldado;

use Illuminate\Http\Request;

class SoldadoController extends Controller
{
    public function vista(){
        return view('soldado');
    }
    public function result(Request $request)
    {
        $soldado = new Soldado();
        $soldado->nombre = $request->nombre;
        $soldado->apellidos = $request->apellidos;
        $soldado->grado = $request->grado;


        $soldado->save();

        return $soldado;
    }
}


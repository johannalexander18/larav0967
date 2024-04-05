<?php

namespace App\Http\Controllers;
use App\Models\servicio;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function vista()
    {
        return view('servicio');
    }

    public function result(Request $request)
    {
        $servicio = new Servicio();
        $servicio->actividad = $request->actividad;
        $servicio->fecha_realizacion = $request->fecha_realizacion;

        $servicio->save();

        return $servicio;
    }
}

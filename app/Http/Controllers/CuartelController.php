<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuartel;

class CuartelController extends Controller
{
    public function vista()
    {
        return view('cuartel');
    }

    public function result(Request $request)
    {
        $cuartel = new Cuartel();
        $cuartel->nombre = $request->nombre;
        $cuartel->ubicacion = $request->ubicacion;

        $cuartel->save();

        return $cuartel;
    }
}

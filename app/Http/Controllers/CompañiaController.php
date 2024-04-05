<?php

namespace App\Http\Controllers;
use App\Models\compañia;

use Illuminate\Http\Request;

class CompañiaController extends Controller
{
    public function vista()
    {
        return view('compañia');
    }


    public function result(Request $request)
    {
        $compañia = new Compañia();
        $compañia->numero_compania = $request->numero_compania;
        $compañia->actividad_principal = $request->actividad_principal;

        $compañia->save();

        return $compañia;
    }
}



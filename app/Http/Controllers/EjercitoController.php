<?php

namespace App\Http\Controllers;
use App\Models\ejercito;

use Illuminate\Http\Request;

class EjercitoController extends Controller
{
    public function vista()
    {
        return view('ejercito');
    }


    public function result(Request $request)
    {
        $ejercito = new ejercito();
        $ejercito->denominacion = $request->denominacion;

        $ejercito->save();

        return $ejercito;
    }
}

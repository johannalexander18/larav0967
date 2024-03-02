<?php

namespace App\Http\Controllers;
use App\Models\Primo;

use Illuminate\Http\Request;

class PrimosController extends Controller
{
    public function mos(){
        return view('numprimo');
    }
    public function esPrimo($numero)
    {

        if ($numero <= 1) {
            return false;
        }

        for ($i = 2; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }

        return true;
    }

    public function result(Request $request){

        $numero = new Primo();
        $numero->num=$request->numero;
        $num = $request->numero;

        $esPrimo = $this->esPrimo($num);

        if($esPrimo){
            $numero->result = "Es primo";
        } else {
            $numero->result = "No es primo";
        }
        $numero->save();
        return $numero;

    }
//---
}

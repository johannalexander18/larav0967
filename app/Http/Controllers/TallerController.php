<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function mos(){
        return view('primo');
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

    public function primo(Request $request){
        $numero = $request->input('numero'); 

        $esPrimo = $this->esPrimo($numero); 

        if($esPrimo){
            return "El número $numero es primo.";
        } else {
            return "El número $numero no es primo.";
        }
    }
//-----------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------
public function form(){
    return view('amigos');
}
public function ami(Request $request)
{
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($this->sonAmigos($numero1, $numero2)) {
        return "Los números $numero1 y $numero2 son amigos.";
    } else {
        return "Los números $numero1 y $numero2 no son amigos.";
    }
}


private function sonAmigos($numero1, $numero2)
{
    $sumarDivisores = function ($numero) {
        $suma = 0;
        for ($i = 1; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                $suma += $i;
            }
        }
        return $suma;
    };

    if ($sumarDivisores($numero1) == $numero2 && $sumarDivisores($numero2) == $numero1) {
        return true; 
    } else {
        return false;
}
   
}
//------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
public function prom(){
    return view('promedio');
}
public function prome(Request $request)
    {
        
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');

      
        $promedio = ($nota1 + $nota2 + $nota3) / 3;

        return "El promedio de las notas es: $promedio";
    }
    //-------------------------------------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------------------------------------
    public function ra(){
        return view('cuadratica');
    }
    public function rais(Request $request)
    {
        
        $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        
        $discriminante = $b**2 - 4*$a*$c;

   
        if ($discriminante < 0) {
            return "Las raíces de la ecuación cuadrática son complejas.";
        }

   
        $raiz1 = (-$b + sqrt($discriminante)) / (2*$a);
        $raiz2 = (-$b - sqrt($discriminante)) / (2*$a);

        return "Las raíces de la ecuación cuadrática son: $raiz1, $raiz2";
    }


}

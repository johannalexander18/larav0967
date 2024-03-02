<?php

namespace App\Http\Controllers;
use App\Models\Pet;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function formulariopet(){

        return view('pet');

     }



     public function clasanimal(Request $request){

        $animal = new Pet();
        $animal->name=$request->name;
        $animal->type_of_animal=$request->tipo;
        $animal->save();
        return $animal;
     }
}

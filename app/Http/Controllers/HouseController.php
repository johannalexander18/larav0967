<?php

namespace App\Http\Controllers;
use App\Models\house;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function formulariocasa(){

    return view('house');

 }



 public function clascasa(Request $request){

    $casa = new house();
    $casa->barrio=$request->direc;
    $casa->color=$request->color;
    $casa->save();
    return $casa;
 }

}

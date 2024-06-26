<?php
namespace App\Http\Support\Facades\Route;

use App\Http\Controllers\CursoController;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\PrimosController;
use App\Http\Controllers\SoldadoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\EjercitoController;
use App\Http\Controllers\CompañiaController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/curso',[CursoController::class,'create']);
// Route::post('/curso',[CursoController::class,'store'])->name('curso.store');



// Route::get('/num', [TallerController::class, 'mos']);
// Route::post('/num',[TallerController::class,'primo'])->name('num.primo');

// Route::get('/numero', [TallerController::class, 'form']);
// Route::post('/numero',[TallerController::class,'ami'])->name('numero.amigo');

// Route::get('/nota', [TallerController::class, 'prom']);
// Route::post('/nota',[TallerController::class,'prome'])->name('nota.promedio');

// Route::get('/cuadratica', [TallerController::class, 'ra']);
// Route::post('/cuadratica',[TallerController::class,'rais'])->name('cuadratica.valor');

// Route::get('/formpet',[PetController::class,'formulariopet']);
// Route::post('/formpet',[PetController::class,'clasanimal'])->name('clase-animal');

// Route::get('/formhouse',[HouseController::class,'formulariocasa']);
// Route::post('/formhouse',[HouseController::class,'clascasa'])->name('tipo-casa');

// Route::get('/forprimo',[PrimosController::class,'mos']);
// Route::post('/forpromo',[PrimosController::class,'result'])->name('num-primo');

Route::get('/soldado',[SoldadoController::class,'vista']);
Route::post('/soldado',[SoldadoController::class,'result'])->name('soldados.store');

Route::get('/ejercito',[EjercitoController::class,'vista']);
Route::post('/ejercito',[EjercitoController::class,'result'])->name('cuerpos.store');

Route::get('/compañia',[CompañiaController::class,'vista']);
Route::post('/compañia',[CompañiaController::class,'result'])->name('companias.store');

Route::get('/cuartel',[CuartelController::class,'vista']);
Route::post('/cuartel',[CuartelController::class,'result'])->name('cuarteles.store');

Route::get('/servicio',[ServicioController::class,'vista']);
Route::post('/servicio',[ServicioController::class,'result'])->name('servicios.store');

Route::get('cursos/create',[CursoController::class,'create']);
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');

Route::get('/', function () {
    return view('control');
});
/*Route::get('curso',[CursoController::class,'hola'])->name('curso.show');*/
// Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'hola'])->name('curso.show');
// Route::get('/num/{dato1}',[NumPrimo::class,'primo'])->name('num.show');


<?php

use App\Http\Controllers\EnviarAvisoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrincipalesController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ServiciotecnicoController;
use App\Http\Controllers\TipoequipoController;
use App\Http\Controllers\TiposervicioController;
use Illuminate\Support\Facades\Route;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');


// Route::get('/enviarcorreo',function(){


// });
// Route::post('enviarcorreo/{correo}',[EnviarAvisoController::class,'store'])->name('enviarcorreo.store');









Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/reportes', [PrincipalesController::class, 'reportes'])->name('reportes.reportes');
    Route::get('/servicios', [PrincipalesController::class, 'servicios'])->name('servicios.servicios');
    Route::get('/reportes/clientes', [ReporteController::class, 'clientes'])->name('reportes.clientes');
    Route::get('/reportes/equipos', [ReporteController::class, 'equipos'])->name('reportes.equipos');
    Route::get('serviciotecnico/listar', [ServiciotecnicoController::class, 'listar'])->name('serviciotecnico.listar');
    Route::get('enviarcorreo/{user}', [EnviarAvisoController::class, 'store'])->name('enviarcorreo.store');
    // Rutas de TIPO SERVICIO
    // names controla el nombre de las rutas tiposervicio.edit
    // parameters controla el nombre de los paramentros que reciviran las funciones tiposervicio
    Route::resource('tiposervicio', TiposervicioController::class)->parameters(['tiposervicio' => 'tiposervicio'])->names('tiposervicio');


    // Rutas de TIPO EQUIPO
    Route::resource('tipoequipo', TipoequipoController::class)->parameters(['tipoequipo' => 'tipoequipo'])->names('tipoequipo');
    // Rutas de SERVICIO TECNICO
    Route::resource('serviciotecnico', ServiciotecnicoController::class)->parameters(['serviciotecnico' => 'serviciotecnico'])->names('serviciotecnico');
    Route::get('tiposervicio/error',[TiposervicioController::class,'error'])->name('tiposervicio.error');

    // repprtes
    Route::get('reportes/pdf/clientes/',[ReporteController::class,'pdfclienteall']);

    Route::get('reportes/pdf/clientes/{estado}',[ReporteController::class,'pdfclienteestado']);

    Route::get('reportes/pdf/clientes/{fechainicio}/{fechafin}',[ReporteController::class,'pdfclientefecha']);

    Route::get('reportes/pdf/clientes/{fechainicio}/{fechafin}/{estado}',[ReporteController::class,'pdfclientetodos']);

    
     // repprtes
     Route::get('reportes/pdf/equipos/',[ReporteController::class,'pdfequiposall']);
     
     Route::get('reportes/pdf/equipos/{estado}',[ReporteController::class,'pdfequipoestado']);

     Route::get('reportes/pdf/equipos/{fechainicio}/{fechafin}',[ReporteController::class,'pdfequiposfecha']);

     Route::get('reportes/pdf/equipos/{fechainicio}/{fechafin}/{estado}',[ReporteController::class,'pdfequipostodos']);

     
});

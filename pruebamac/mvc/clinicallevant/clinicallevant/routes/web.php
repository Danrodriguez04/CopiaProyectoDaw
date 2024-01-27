<?php

use App\Http\Controllers\CitaController;
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

//Route::view('/cita', 'layouts.cita.tipocita');
Route::get('/cita', [CitaController::class, 'getAppointmentsDetails'])->name('create.cita');
Route::get('/cita/confirm', [CitaController::class, 'confirm'])->name('confirm.cita');
Route::post('/cita/create', [CitaController::class, 'create'])->name('create');
Route::get('/cita/show/{patient}', [CitaController::class, 'getAppointmentsByPatientId'])->name('show.cita');


Route::get('/', function () {
    return view('welcome');
});

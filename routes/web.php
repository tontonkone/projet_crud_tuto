<?php

use App\Http\Controllers\EtudiantController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/etudiant', [EtudiantController::class, "index" ])->name("etudiant");
Route::get('/etudiant/create', [EtudiantController::class, "create" ])->name("etudiant.create");

Route::post('/etudiant/create', [EtudiantController::class, "store" ])->name("etudiant.ajouter");
Route::delete('/etudiant/{etudiant}', [EtudiantController::class, "delete" ])->name("etudiant.supprimer");



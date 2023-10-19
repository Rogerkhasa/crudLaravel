<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListeEtudiants;

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

Route::get('/', [ListeEtudiants::class, 'AffEtudiants']);


Route::get('/ajouter', [ListeEtudiants::class, 'AjoutEtudiants']);
Route::post('/ajouter/traitement', [ListeEtudiants::class, 'Traitement']);


Route::get('/modifier/{id}',[ListeEtudiants::class, 'modifier']);
Route::post('/modifier/traitementModification', [ListeEtudiants::class, 'TraitementModification']);


Route::get('/supprimer/{id}', [ListeEtudiants::class, 'Suppression']);
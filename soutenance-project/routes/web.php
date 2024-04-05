<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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
Route::get('/recherche-patient', [PagesController::class, 'recherchePatient'])->name('pages.recherche-patient');
Route::get('/voir-patient', [PagesController::class, 'voirPatient'])->name('pages.voir-patient');
Route::get('/liste-visite-patient', [PagesController::class, 'listeVisitePatient'])->name('pages.liste-viste-patient');
Route::get('/visite-patient', [PagesController::class, 'VisitePatient'])->name('pages.viste-patient');
Route::get('/liste-analyse-patient', [PagesController::class, 'listeAnalysePatient'])->name('pages.liste-analyse-patient');
Route::get('/analyse-patient', [PagesController::class, 'analysePatient'])->name('pages.analyse-patient');
Route::get('/liste-soin-patient', [PagesController::class, 'listeSoinPatient'])->name('pages.liste-soin-patient');
Route::get('/soin-patient', [PagesController::class, 'soinPatient'])->name('pages.soin-patient');
Route::get('/liste-patient-rechercher', [PagesController::class, 'listePatientRechercher'])->name('pages.liste-patient-rechercher');


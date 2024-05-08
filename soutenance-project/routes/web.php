<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


/*
|--------------------------------------------------------------------------
| Web //Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web //Routes for your application. These
| //Routes are loaded by the //RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/recherche-patient', [PagesController::class, 'recherchePatient'])->name('pages.recherche-patient');
    Route::get('/voir-patient', [PagesController::class, 'voirPatient'])->name('pages.voir-patient');
    Route::get('/liste-visite-patient', [PagesController::class, 'listeVisitePatient'])->name('pages.liste-viste-patient');
    Route::get('/visite-patient', [PagesController::class, 'VisitePatient'])->name('pages.viste-patient');
    Route::get('/liste-analyse-patient', [PagesController::class, 'listeAnalysePatient'])->name('pages.liste-analyse-patient');
    Route::get('/analyse-patient', [PagesController::class, 'analysePatient'])->name('pages.analyse-patient');
    Route::get('/liste-soin-patient', [PagesController::class, 'listeSoinPatient'])->name('pages.liste-soin-patient');
    Route::get('/soin-patient', [PagesController::class, 'soinPatient'])->name('pages.soin-patient');
    Route::get('/liste-patient-rechercher', [PagesController::class, 'listePatientRechercher'])->name('pages.liste-patient-rechercher');
    Route::get('/note-patient', [PagesController::class, 'notePatient'])->name('pages.note-patient');
    Route::get('/voire-notification', [PagesController::class, 'voireNotification'])->name('pages.voire-notification');
});

// Toutes les autres routes nécessitent une authentification
Route::middleware(['auth'])->group(function () {
    Route::get('/welcome', [PagesController::class, 'welcome'])->name('pages.welcome');
});

// Routes accessibles sans authentification
Route::middleware('web')->group(function () {
    Auth::routes();
});

Route::get('/', [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::get('/forgot-password', [PagesController::class, 'forgotPassword'])->name('pages.forgot-password');
Route::get('/error-404', [PagesController::class, 'error404'])->name('pages.error-404');
Route::get('/page-attente', [PagesController::class, 'pageAttente'])->name('pages.page-attente');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

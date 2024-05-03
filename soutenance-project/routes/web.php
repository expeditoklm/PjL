<?php

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


Route::get('/', [PagesController::class, 'login'])->name('pages.login');
Route::get('/welcome', [PagesController::class, 'welcome'])->name('pages.welcome');


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
Route::get('/sign-up', [PagesController::class, 'signUp'])->name('pages.sign-up');
Route::post('/sign-up', [PagesController::class, 'signUpPost'])->name('pages.sign-up.post');
Route::get('/login', [PagesController::class, 'login'])->name('pages.login');
Route::post('/login', [PagesController::class, 'loginPost'])->name('pages.login.post');
Route::get('/forgot-password', [PagesController::class, 'forgotPassword'])->name('pages.forgot-password');
Route::get('/error-404', [PagesController::class, 'error404'])->name('pages.error-404');
Route::get('/voire-notification', [PagesController::class, 'voireNotification'])->name('pages.voire-notification');


Route::middleware('web')->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

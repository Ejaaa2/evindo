<?php

use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\PesertaController;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/formtambahmateri',[HelpdeskController::class,'formtambahmateri'])->name('datacourse');
Route::post('/inputmateri',[HelpdeskController::class,'inputmateri']);
Route::get('/tampilmateri',[HelpdeskController::class,'showmateri'])->name('tampilmateri');

Route::get('/showformnilai',[PengajarController::class,'showformnilai']);
Route::post('/inputnilai',[PengajarController::class,'inputnilai']);

Route::get('/nilaipeserta',[HelpdeskController::class,'shownilai'])->name('shownilai');
Route::get('/terimasiswa',[HelpdeskController::class,'terimasiswa']);
Route::post('/statussiswa',[HelpdeskController::class,'statussiswa']);
Route::get('/datapeserta',[HelpdeskController::class,'datapeserta']);

Route::get('/materistd',[PesertaController::class,'materistd']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

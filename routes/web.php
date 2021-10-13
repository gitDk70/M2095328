<?php

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


use \App\Http\Controllers\EtudiantController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\ForumController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UploadsController;

// Route::get('/', [EtudiantController::class, 'index']);
Route::get('/home', [EtudiantController::class, 'index']);
Route::get('/etudiant/{etudiant}',[EtudiantController::class, 'show']);



//Routes etudiants
Route::get('/etudiant/etudiant/create', [EtudiantController::class, 'create']); 
Route::post('/etudiant/etudiant/create', [EtudiantController::class, 'store']); 
Route::get('/etudiant/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit'); 
Route::put('/etudiant/{etudiant}/edit', [EtudiantController::class, 'update'])->name('etudiant.update'); 
Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');

//routes pour admin
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration', [AuthController::class, 'create']);
Route::post('custom-registration', [AuthController::class, 'store'])->name('register.custom');
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//routes forum

Route::get('/forum', [ForumController::class, 'index'])->name('forum.home'); 
Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create'); 
Route::post('/forum/create', [ForumController::class, 'store']); 
Route::get('/forum/{forum}', [ForumController::class, 'show'])->middleware('auth');
Route::get('/forum/{forum}/edit', [ForumController::class, 'edit'])->middleware('auth');
Route::put('/forum/{forum}/edit', [ForumController::class, 'update'])->middleware('auth');
Route::delete('/forum/{forum}', [ForumController::class, 'destroy'])->name('forum.destroy');


//route langues
Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('langue');

//route pdf
Route::get('/forum/{forum}/PDF', [ForumController::class, 'showPdf']);

//route documents
Route::post('document/up',[UploadsController::class, 'uploadFile']);
Route::get('/document/up', [UploadsController::class, 'index'])->name('forum.upload'); 
Route::get('/document', [UploadsController::class, 'show'])->name('doc.show')->middleware('auth');
Route::delete('/document/{doc}', [UploadsController::class, 'destroy'])->name('doc.destroy');
Route::get('/document/{doc}/edit', [UploadsController::class, 'edit'])->name('doc.edit'); 
Route::put('/document/{doc}/edit', [UploadsController::class, 'update'])->name('doc.update'); 

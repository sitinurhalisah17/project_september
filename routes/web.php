<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UserController;
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
    return view('home');
});

Route::get('/', [UserController::class, 'login']);
Route::post('/auth', [UserController::class, 'auth']);
Route::get('/logout', [UserController::class, 'logout']);

//tampilan
Route::get('/home', [BeritaController::class, 'home']);
Route::get('/hometerkini/{id}', [BeritaController::class, 'hometerkini']);
Route::get('/isiberita/{id}', [BeritaController::class, 'isiberita']);
Route::get('/hometerkini1', [BeritaController::class, 'hometerkini1']);
Route::get('/hometerkini2', [BeritaController::class, 'hometerkini2']);
Route::get('/hometerkini3', [BeritaController::class, 'hometerkini3']);

Route::get('/terpopuler', [BeritaController::class, 'terpopuler']);
Route::get('/terpopuler1', [BeritaController::class, 'terpopuler1']);
Route::get('/terpopuler2', [BeritaController::class, 'terpopuler2']);
Route::get('/terpopuler3', [BeritaController::class, 'terpopuler3']);
Route::get('/terpopuler4', [BeritaController::class, 'terpopuler4']);

Route::get('/topnews', [BeritaController::class, 'topnews']);
Route::get('/topnews1', [BeritaController::class, 'topnews1']);
Route::get('/topnews2', [BeritaController::class, 'topnews2']);
Route::get('/topnews3', [BeritaController::class, 'topnews3']);
Route::get('/topnews4', [BeritaController::class, 'topnews4']);

Route::get('/hukum', [BeritaController::class, 'hukum']);
Route::get('/hukum1', [BeritaController::class, 'hukum1']);
Route::get('/hukum2', [BeritaController::class, 'hukum2']);
Route::get('/hukum3', [BeritaController::class, 'hukum3']);

Route::get('/ekonomi', [BeritaController::class, 'ekonomi']);
Route::get('/ekonomi1', [BeritaController::class, 'ekonomi1']);
Route::get('/ekonomi2', [BeritaController::class, 'ekonomi2']);
Route::get('/ekonomi3', [BeritaController::class, 'ekonomi3']);


Route::get('/politik', [BeritaController::class, 'politik']);
Route::get('/politik1', [BeritaController::class, 'politik1']);


//MIDDLEWARE
Route::middleware('statusLogin')->group(function(){

    Route::get('/index', [BeritaController::class, 'show']);
    Route::post('/search', [BeritaController::class, 'search']);
    Route::get('/berita/create', [BeritaController::class, 'create']);
    Route::post('/berita/create', [BeritaController::class, 'add']);
    Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
    Route::post('/berita/update/{id}', [BeritaController::class, 'update']);
    Route::get('/berita/delete/{id}', [BeritaController::class, 'delete']);


   Route::get('/user', [UserController::class, 'show']);
   Route::post('/user', [UserController::class, 'search']);
   Route::get('/user/create', [UserController::class, 'create']);
   Route::post('/user/create', [UserController::class, 'add']);
   Route::get('/user/delete/{id}', [UserController::class, 'delete']);
   Route::get('/user/edit/{id}', [UserController::class, 'edit']);
   Route::post('/user/update/{id}', [UserController::class, 'update']);

});

// Route::get('/dashboard',[BeritaController::class, 'showdb']);
Route::get('dashboard', [UserController::class, 'dashboard']);






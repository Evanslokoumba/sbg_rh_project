<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectionController;
use App\Http\Controllers\AuthController;

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

/*
Route::get('/', function () {
    return view('contenus/pages/connexion');
});
*/
Route::get('/test_accueil', function () {
    return view('contenus/pages/accueil');
});

Route::get('/test_pageII', function () {
    return view('welcome');
});

//Route test
Route::get('connexion_page', [RedirectionController::class, 'create']);
Route::get('accueil_page', [RedirectionController::class, 'index']);


#Route authentifications
Route::get('/', [App\Http\Controllers\AuthController::class, 'seConnecter'])->name('/');;
Route::post('/connexion', [App\Http\Controllers\AuthController::class, 'traiterInfos'])->name('auth.login');




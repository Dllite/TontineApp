<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\AccueilController;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', function(){
    return view('home');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', [HomeController::class, 'index']);

//Route::get('/a-propos', 'AproposController@index')->name('apropos');

Route::get('/a-propos', [AproposController::class, 'index']);

Route::get('/accueil', [AccueilController::class, 'index']);


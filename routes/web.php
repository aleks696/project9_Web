<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\PasswordController;

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
})->name('home');


Route::get('/login',[Controller::class, 'login'])->name('login');
Route::post('/login',[Controller::class, 'loginPost'])->name('login.post');
Route::get('/registration', [Controller::class, 'registration'])->name('registration');
Route::post('/registration', [Controller::class, 'registrationPost'])->name('registration.post');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category}', 'CategoryController@show');

Route::get('/products', 'ProductController@index');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/products', 'ProductController@index')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

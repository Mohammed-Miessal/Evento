<?php

use App\Http\Controllers\Auth\AuthController;
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
    return view('welcome');
})->name('home')->middleware('auth');


Route::get('/login', [AuthController::class , 'login'])->name('loginForm');
Route::post('/login', [AuthController::class , 'postLogin'])->name('login');
Route::get('/register', [AuthController::class , 'register'])->name('registerForm');
Route::post('/register', [AuthController::class , 'postRegister'])->name('register');
Route::get('/logout', [AuthController::class , 'logout'])->name('logout');


Route::group(['middleware' => 'role:Administrateur'], function() {
    //
 });


 Route::get('/dashboard', function () {
    return view('dashboard.index');
});
 

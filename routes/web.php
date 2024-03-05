<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategorieController;

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

Route::get('/1', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'login'])->name('loginForm');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('registerForm');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'role:Administrateur'], function () {
    //
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/event/index', function () {
    return view('dashboard.event.index');
});



Route::get('/event/add', function () {
    return view('dashboard.event.add');
});

Route::get('/event/edit', function () {
    return view('dashboard.event.edit');
});




Route::prefix('categorie')->middleware(['auth', 'role:Administrateur'])->group(function () {
    Route::get('/index', [CategorieController::class, 'index'])->name('categorie.index');
    Route::get('/add', [CategorieController::class, 'create'])->name('categorie.add');
    Route::post('/add', [CategorieController::class, 'store'])->name('categorie.store');
    Route::get('/edit/{categorie}', [CategorieController::class, 'edit'])->name('categorie.edit');
    Route::post('/edit/{categorie}', [CategorieController::class, 'update'])->name('categorie.update');
    Route::get('/delete/{categorie}', [CategorieController::class, 'destroy'])->name('categorie.delete');
});
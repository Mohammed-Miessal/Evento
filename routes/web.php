<?php

use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;

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

Route::group([], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('loginForm');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('registerForm');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::prefix('categorie')->middleware(['auth', 'role:Administrateur'])->group(function () {
    Route::get('/index', [CategorieController::class, 'index'])->name('categorie.index');
    Route::get('/add', [CategorieController::class, 'create'])->name('categorie.add');
    Route::post('/add', [CategorieController::class, 'store'])->name('categorie.store');
    Route::get('/edit/{categorie}', [CategorieController::class, 'edit'])->name('categorie.edit');
    Route::post('/edit/{categorie}', [CategorieController::class, 'update'])->name('categorie.update');
    Route::get('/delete/{categorie}', [CategorieController::class, 'destroy'])->name('categorie.delete');
});



Route::prefix('event')->middleware(['auth'])->group(function () {
    Route::get('/index', [EventController::class, 'index'])->name('event.index');
    Route::get('/add', [EventController::class, 'create'])->name('event.add');
    Route::post('/add', [EventController::class, 'store'])->name('event.store');
    Route::get('/edit/{event}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/edit/{event}', [EventController::class, 'update'])->name('event.update');
    Route::get('/delete/{event}', [EventController::class, 'destroy'])->name('event.delete');
    Route::get('/show/{event}', [EventController::class, 'show'])->name('event.show');
});





Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');   // Dashboard index
    Route::get('/admin', [EventController::class, 'admin'])->name('event.admin')->middleware('role:Administrateur');
    Route::post('/status/{event}', [DashboardController::class, 'changeEventStatus'])->name('event.status')->middleware('role:Administrateur');
});





Route::group([], function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');

    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/events', [HomeController::class, 'allEvents'])->name('allEvents');
    Route::get('/event/{id}', [HomeController::class, 'showDetails'])->name('eventDetails');
});


Route::group([], function () {
    Route::post('event/book/{event}', [ReservationController::class, 'book'])->name('event.book');
    Route::get('reservations', [ReservationController::class, 'allreservations'])->name('reservations')->middleware('auth', 'role:Organisateur');
    Route::post('reservation/approve/{reservation}', [ReservationController::class, 'approve'])->name('reservation.approve')->middleware('auth', 'role:Organisateur');
});



// Route::get('/', function () {
//     return view('welcome');
// })->name('home')->middleware('auth');

// Route::get('/1', function () {
//     return view('home');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

// Route::get('/event/index', function () {
//     return view('dashboard.event.index');
// });

// Route::get('/event/add', function () {
//     return view('dashboard.event.add');
// });

// Route::get('/event/edit', function () {
//     return view('dashboard.event.edit');
// });

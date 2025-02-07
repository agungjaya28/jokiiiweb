<?php

use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;


Route::get('/', function () {
    return view('homePage');
})->name('home');

// caraOrder
Route::get('/caraOrder', function () {
    return view('caraOrder');
})->name('caraOrder');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::prefix('login')->group(function () {
    Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('login.admin');
    Route::get('/worker', [LoginController::class, 'showWorkerLoginForm'])->name('login.worker');
    Route::get('/user', [LoginController::class, 'showUserLoginForm'])->name('login.user');
});

Route::prefix('register')->group(function () {
    Route::get('/admin', [RgstController::class, 'showAdminRegisterForm'])->name('register.admin');
    Route::get('/worker', [RgstController::class, 'showWorkerRegisterForm'])->name('register.worker');
    Route::get('/user', [RgstController::class, 'showUserRegisterForm'])->name('register.user');
});

Route::get('/payment', [PayController::class, 'showForm'])->name('payment.form');
Route::post('/payment', [PayController::class, 'processPay'])->name('payment.process');

// login dan regist
// Menampilkan halaman login dan register
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

// Proses login dan logout
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Proses register
Route::post('/register', [RgstController::class, 'register']);

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm'])->name('login.admin');
Route::get('/login/worker', [LoginController::class, 'showWorkerLoginForm'])->name('login.worker');
Route::get('/login/user', [LoginController::class, 'showUserLoginForm'])->name('login.user');

Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm'])->name('register.admin');
Route::get('/register/worker', [RegisterController::class, 'showWorkerRegisterForm'])->name('register.worker');
Route::get('/register/user', [RegisterController::class, 'showUserRegisterForm'])->name('register.user');

Route::get('/login/admin', [RgstController::class, 'showAdminLogin'])->name('login.admin');
Route::get('/login/worker', [RgstController::class, 'showWorkerLogin'])->name('login.worker');
Route::get('/login/user', [RgstController::class, 'showUserLogin'])->name('login.user');

Route::post('/login/admin', [RgstController::class, 'adminLogin']);
Route::post('/login/worker', [RgstController::class, 'workerLogin']);
Route::post('/login/user', [RgstController::class, 'userLogin']);

Route::get('/worker/dashboard', [WorkerController::class, 'index'])->name('worker.dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm'])->name('register.admin');
Route::get('/register/worker', [RegisterController::class, 'showWorkerRegisterForm'])->name('register.worker');
Route::get('/register/user', [RegisterController::class, 'showUserRegisterForm'])->name('register.user');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

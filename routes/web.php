<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruiterController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/* ---------------------- Recruiter ---------------------- */
Route::get('/recruitment', function () {
    return view('recruiter.index');
});

Route::prefix('recruiter')->group(function() {
    //Dashboard
    Route::get('/dashboard', [RecruiterController::class, 'showDashboard'])->name('recruiter_dashboard')->middleware('recruiter');

    //Login
    Route::get('/login', [RecruiterController::class, 'showLogin'])->name('recruiter_login');
    Route::post('/login/account', [RecruiterController::class, 'Login'])->name('recruiter_account');
    //Register
    Route::get('/register', [RecruiterController::class, 'showRegister'])->name('recruiter_register');
    Route::post('/register/create', [RecruiterController::class, 'Create'])->name('recruiter_create');
});
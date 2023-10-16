<?php

use App\Http\Controllers\CountryController;
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
require __DIR__.'/auth.php';

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */
/* ---------------------- Web ---------------------- */

Route::get('/careers', function(){
    return view('jobs.index')->with('title', 'Careers Lists | Job Search');
});

Route::get('/companies', function() {
    return view('company.index')->with('title', 'Company Lists | Job Search');
});

Route::get('/companies/reviews', function() {
    return view('company.reviews.index')->with('title', 'Company Reviews | Job Search');
});

Route::get('/companies/salaries', function() {
    return view('company.salaries.index')->with('title', 'Company Salaries | Job Search');
});


Route::controller(CountryController::class)->group(function() {
    Route::get('/countries', 'showAll');
    Route::get('/countries/{id}', 'getCountryCode')->where(['slug' => '[A-Za-z]']);
});



/* ---------------------- Users ---------------------- */

Route::get('/', function () {
    return view('welcome');
})->name('user_dashboard');

/* ---------------------- Recruiter ---------------------- */
Route::get('/recruitment', function () {
    return view('recruiter.index');
})->middleware('guest');

Route::prefix('recruiter')->group(function() {
    //Dashboard
    Route::get('/dashboard', [RecruiterController::class, 'showDashboard'])->name('recruiter_dashboard')->middleware('auth:recruiter');

    //Login
    Route::get('/login', [RecruiterController::class, 'showLogin'])->name('recruiter_login');
    Route::post('/login/account', [RecruiterController::class, 'Login'])->name('recruiter_account');
    //Register
    Route::get('/register', [RecruiterController::class, 'showRegister'])->name('recruiter_register');
    Route::post('/register/create', [RecruiterController::class, 'Create'])->name('recruiter_create');

    Route::post('/logout', [RecruiterController::class, 'destroy'])->name('recruiter_logout');

});
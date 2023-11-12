<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\JobPostController;

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
require __DIR__.'/recruiter.php';

/* ---------------------- Web ---------------------- */

Route::controller(JobPostController::class)->group(function() {
    Route::get('/careers', 'showAllPost')->name('career');
    Route::get('/careers/view/{id}', 'userCareerView')->name('career_view');
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
    Route::get('/countries', 'showAll')->name('countries');
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
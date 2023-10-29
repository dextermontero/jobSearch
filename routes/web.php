<?php

use App\Http\Controllers\CompanyController;
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

Route::prefix('recruiter')->middleware('nocache')->group(function() {
    // Get Routes //

    // Login , Register and Login 
    Route::get('/login', [RecruiterController::class, 'showLogin'])->name('recruiter_login');
    Route::get('/register', [RecruiterController::class, 'showRegister'])->name('recruiter_register');
    Route::get('/logout', [RecruiterController::class, 'destroy'])->name('recruiter_logout');

    // Dashboard
    Route::get('/dashboard', [RecruiterController::class, 'showDashboard'])->name('recruiter_dashboard')->middleware('auth:recruiter');

    // Applicant List
    Route::get('/applicants', [RecruiterController::class, 'showAllApplicant'])->name('recruiter_applicant')->middleware('auth:recruiter');
    Route::get('/applicants/{id}', [RecruiterController::class, 'showApplicant'])->name('recruiter_viewApplicant')->middleware('auth:recruiter');

    // Job Post
    Route::get('/post', [RecruiterController::class, 'showPost'])->name('recruiter_post')->middleware('auth:recruiter');
    Route::get('/post/job', [RecruiterController::class, 'showJobPost'])->name('recruiter_jobpost')->middleware('auth:recruiter');

    // Company Info
    Route::get('/company', [RecruiterController::class, 'showCompanyAll'])->name('recruiter_companyAll')->middleware('auth:recruiter'); // SELECT *
    Route::get('/create', [RecruiterController::class, 'createCompany'])->name('recruiter_createCompany')->middleware('auth:recruiter'); // CREATE COMPANY
    Route::get('/company/{id}', [RecruiterController::class, 'showCompanyID'])->name('recruiter_companyID')->middleware('auth:recruiter'); // SELECT BY ID
    Route::get('/company/edit/{id}', [RecruiterController::class, 'showEditCompanyID'])->name('recruiter_editCompanyID')->middleware('auth:recruiter'); // EDIT BY ID
    Route::post('/company/{id}', [RecruiterController::class, 'archiveCompanyID'])->name('recruiter_archiveCompanyID')->middleware('auth:recruiter'); // ARCHIVE BY ID
    
    // Post Routes //

    // Add Company
    Route::post('/addCompany', [CompanyController::class, 'AddCompany'])->name('recruiter_addCompany')->middleware('auth:recruiter');
    // Login , Register
    Route::post('/login/account', [RecruiterController::class, 'Login'])->name('recruiter_account');
    Route::post('/register/create', [RecruiterController::class, 'Create'])->name('recruiter_create');
});
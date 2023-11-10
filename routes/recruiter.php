<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobPostController;

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


    /* ------------------------------------------ Job Post Controller ---------------------------------------------------- */
    // Job Post
    Route::get('/post', [JobPostController::class, 'showPost'])->name('recruiter_post')->middleware('auth:recruiter');
    Route::get('/post/job', [RecruiterController::class, 'showJobPost'])->name('recruiter_jobpost')->middleware('auth:recruiter');
    Route::post('/post/job', [JobPostController::class, 'createPost'])->name('recruiter_savePost')->middleware('auth:recruiter');
    Route::post('/post/searchcompany', [JobPostController::class, 'showSearchCompany'])->name('recruiter_showcompany')->middleware('auth:recruiter');
    /* Route::post('/post/getID', [RecruiterController::class, 'showGetID'])->name('recruiter_getCompanyID')->middleware('auth:recruiter'); */
    Route::get('/post/edit/{id}', [JobPostController::class, 'postToEdit'])->name('recruiter_editpost')->middleware('auth:recruiter');
    Route::post('/post/update/post', [JobPostController::class, 'postToUpdate'])->name('recruiter_updatepost')->middleware('auth:recruiter');

    // Inactive
    Route::get('/post/inactive/{id}', [JobPostController::class, 'postToCheckID'])->middleware('auth:recruiter'); // to check the id if exists on the job_posts
    Route::post('/post/inactive/{id}', [JobPostController::class, 'postToInactive'])->middleware('auth:recruiter'); // To inactive a job post    
    // Repost
    Route::get('/post/repost/{id}', [JobPostController::class, 'postToCheckID'])->middleware('auth:recruiter'); // to check the id if exists on the job_posts
    Route::post('/post/repost/{id}', [JobPostController::class, 'postToRepost'])->middleware('auth:recruiter'); // To repost a job post    
    // Archive 
    Route::get('/post/archive/{id}', [JobPostController::class, 'postToCheckID'])->middleware('auth:recruiter'); // to check the id if exists on the job_posts
    Route::post('/post/archive/{id}', [JobPostController::class, 'postToArchive'])->middleware('auth:recruiter'); // To archive a job post
    // Remove 
    Route::get('/post/remove/{id}', [JobPostController::class, 'postToCheckID'])->middleware('auth:recruiter'); // to check the id if exists on the job_posts
    Route::post('/post/remove/{id}', [JobPostController::class, 'postToRemove'])->middleware('auth:recruiter'); // To archive a job post

    // Company Info
    Route::get('/create', [RecruiterController::class, 'createCompany'])->name('recruiter_createCompany')->middleware('auth:recruiter'); // CREATE COMPANY
    Route::get('/company', [CompanyController::class, 'showCompanyAll'])->name('recruiter_companyAll')->middleware('auth:recruiter'); // SELECT *
    Route::post('/company/search', [CompanyController::class, 'searchCompany'])->name('recruiter_searchCompany')->middleware('auth:recruiter'); // SELECT BY ID
    Route::get('/company/{id}', [CompanyController::class, 'showCompanyID'])->middleware('auth:recruiter'); // SELECT BY ID
    Route::get('/company/edit/{id}', [CompanyController::class, 'showEditCompanyID'])->middleware('auth:recruiter'); // EDIT BY ID
    Route::get('/company/add/{id}', [CompanyController::class, 'addMoreCompany'])->middleware('auth:recruiter'); // ADD BY ID
    Route::post('/company/{id}', [CompanyController::class, 'archiveCompanyID'])->middleware('auth:recruiter'); // ARCHIVE BY ID
    
    // Post Routes //

    // Add Company
    Route::post('/addCompany', [CompanyController::class, 'AddCompany'])->name('recruiter_addCompany')->middleware('auth:recruiter');
    // Login , Register
    Route::post('/login/account', [RecruiterController::class, 'Login'])->name('recruiter_account');
    Route::post('/register/create', [RecruiterController::class, 'Create'])->name('recruiter_create');
});

?>
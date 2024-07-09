<?php

use App\Http\Controllers\AdminPortal\DashboardController;
use App\Http\Controllers\AdminPortal\LoginController;
use App\Http\Controllers\AdminPortal\UserController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminPortal\ConsultationController as AdminConsultationController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SymptomQuestionController;
use App\Http\Controllers\UserPortal\ContactUsController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [create_controller_nameController::class, 'function_name'])->name('route_name');

//Home


Route::post('/signup', [AuthenticationController::class, 'signup'])->name('signup');
Route::post('/signin', [AuthenticationController::class, 'signin'])->name('signin');

Route::get('/terms-conditions', function () {
    return view('UserPortal/TermsAndConditions/termsConditions');
})->name('termsConditions');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');
    Route::post('update-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('contact_us', [ContactUsController::class, 'showContact'])->name('show-contact');
    Route::post('contact_us', [ContactUsController::class, 'contactStore'])->name('contact-store');


    Route::get('/about', function () {
        return view('UserPortal/About/about');
    })->name('about');

    Route::get('history', [ConsultationController::class, 'history'])->name('history');
    Route::get('prescriptions/latest', [PrescriptionController::class, 'latestPrescription'])->name('prescription.latest');
    Route::get('prescriptions/{id}', [PrescriptionController::class, 'show'])->name('prescription.show');


//Symptoms Description
    Route::get('/symptoms/{id}', [SymptomQuestionController::class, 'show'])->name('symptoms.view');

//Questionnaires
    Route::get('/symptoms/{id}/questions', [SymptomQuestionController::class, 'questionsBySymptomId'])->name('symptoms.questions');
    Route::post('/symptoms/{id}/questions/answer', [AnswerController::class, 'submitAnswer'])->name('symptoms.questions.answer');

    Route::get('prescription', function () {
        return view('UserPortal/Prescription/prescription');
    })->name('prescription');
});
require __DIR__ . '/auth.php';



//Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');


//admin routes
Route::prefix('admin')->group(function (){
//    Route::get('/anyUrlKey', [DashboardController::class, 'controllerFunctionName'])->name('UrlName-anyname');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('adminDashboard');
    Route::get('/consultations',[AdminConsultationController::class, 'consultationHistory'])->name('userConsultationHistory');
    Route::get('/consultations/{id}/prescription',[AdminConsultationController::class, 'showPrescription'])->name('showPrescription');
//    Route::get('/admins',[UserController::class, 'allAdmins'])->name('adminHistory');
    Route::get('/users',[UserController::class, 'allUsers'])->name('userHistory');
    Route::get('/users/{id}/profile',[UserController::class, 'showUser'])->name('userProfile');
    Route::get('/users/{id}/edit-profile', [UserController::class, 'editUser'])->name('admin-edit-profile');
    Route::post('/users/{id}/update-user', [UserController::class, 'updateUser'])->name('update-user');
    Route::get('/login', [LoginController::class, 'showLogin'])->name('admin-login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin-login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin-logout');

});





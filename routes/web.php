<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SymptomController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [create_controller_nameController::class, 'function_name'])->name('route_name');

//Home



Route::post('/signup', [AuthenticationController::class, 'signup'])->name('signup');
Route::post('/signin', [AuthenticationController::class, 'signin'])->name('signin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('profile',[ProfileController::class, 'profile'])->name('profile');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/contact_us', function () {
        return view('Contact/contact_us');
    })->name('contact');

    Route::get('/about', function () {
        return view('About/about');
    })->name('about');


    Route::get('editProfile', function () {
        return view('Profile/editProfile');
    })->name('edit-profile');

//Symptoms Description
    Route::get('/symptoms/{id}',[SymptomController::class,'show'])->name('symptoms.view');

//Questionnaires
    Route::get('/symptoms/{id}/questions',[SymptomController::class,'questionsBySymptomId'])->name('symptoms.questions');
    Route::post('/symptoms/{id}/questions/answer',[AnswerController::class,'submitAnswer'])->name('symptoms.questions.answer');

    Route::get('prescription', function () {
        return view('Prescription/prescription');
    })->name('prescription');

});
require __DIR__.'/auth.php';



//Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');





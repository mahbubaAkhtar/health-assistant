<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SymptomController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [create_controller_nameController::class, 'function_name'])->name('route_name');

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact_us', function () {
    return view('Contact/contact_us');
})->name('contact');

Route::get('/about', function () {
    return view('About/about');
})->name('about');

Route::get('profile', function () {
    return view('Profile/profile');
})->name('profile');

Route::get('editProfile', function () {
    return view('Profile/editProfile');
})->name('edit-profile');

//Symptoms Description
Route::get('/symptoms/{id}',[SymptomController::class,'show'])->name('symptoms.view');

//Questionnaires
Route::get('/symptoms/{id}/questions',[SymptomController::class,'questionsBySymptomId'])->name('symptoms.questions');






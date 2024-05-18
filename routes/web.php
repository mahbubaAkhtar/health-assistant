<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [create_controller_nameController::class, 'function_name'])->name('route_name');
//home

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

Route::get('/symptoms/{id}',[\App\Http\Controllers\SymptomController::class,'show'])->name('symptoms.view');

//Questionnaires

Route::get('questionnaires/fever', function () {
    return view('QuestionnairesDetails/fever');
})->name('fever');

Route::get('questionnaires/foodPoisoning', function () {
    return view('QuestionnairesDetails/food_poisoning');
})->name('food-poisoning');

Route::get('questionnaires/migraine', function () {
    return view('QuestionnairesDetails/migraine');
})->name('migraine');

Route::get('questionnaires/lowBackPain', function () {
    return view('QuestionnairesDetails/low_back_pain');
})->name('low-back-pain');

Route::get('questionnaires/caugh', function () {
    return view('QuestionnairesDetails/caugh');
})->name('caugh');

Route::get('questionnaires/scabies', function () {
    return view('QuestionnairesDetails/scabies');
})->name('scabies');

Route::get('questionnaires/vomiting', function () {
    return view('QuestionnairesDetails/vomiting');
})->name('vomiting');

Route::get('questionnaires/burn', function () {
    return view('QuestionnairesDetails/burn');
})->name('burn');

Route::get('questionnaires/soreThroat', function () {
    return view('QuestionnairesDetails/sore_throat');
})->name('sore-throat');

Route::get('questionnaires/allergicRhinitis', function () {
    return view('QuestionnairesDetails/allergic_rhinitis');
})->name('allergic_rhinitis');




<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home/home');
})->name('home');

Route::get('/contact_us', function () {
    return view('Contact/contact_us');
})->name('contact');

Route::get('profile', function () {
    return view('Profile/profile');
})->name('profile');

Route::get('editProfile', function () {
    return view('Profile/editProfile');
})->name('edit-profile');


Route::get('symptoms/fever', function () {
    return view('SymptomDescriptions/fever');
})->name('symptoms-fever');

Route::get('symptoms/food_poisoning', function () {
    return view('SymptomDescriptions/food_poisoning');
})->name('symptoms-foodPoisoning');

Route::get('symptoms/migraine', function () {
    return view('SymptomDescriptions/migraine');
})->name('symptoms-migraine');

Route::get('symptoms/allergicRhinitis', function () {
    return view('SymptomDescriptions/allergic_rhinitis');
})->name('symptoms-allergicRhinitis');

Route::get('symptoms/lowBackPain', function () {
    return view('SymptomDescriptions/low_back_pain');
})->name('symptoms-lowBackPain');

Route::get('symptoms/scabies', function () {
    return view('SymptomDescriptions/scabies');
})->name('symptoms-scabies');

Route::get('symptoms/soreThroat', function () {
    return view('SymptomDescriptions/sore_throat');
})->name('symptoms-soreThroat');

Route::get('symptoms/viralFever', function () {
    return view('SymptomDescriptions/viral_fever');
})->name('symptoms-viralFever');

Route::get('symptoms/vomiting', function () {
    return view('SymptomDescriptions/vomiting');
})->name('symptoms-vomiting');

Route::get('symptoms/caugh', function () {
    return view('SymptomDescriptions/caugh');
})->name('symptoms-caugh');




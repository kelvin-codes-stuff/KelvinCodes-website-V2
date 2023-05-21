<?php

use Illuminate\Support\Facades\Route;

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

// Testing
Route::get('/test', function (){
    return view('test');
});


Route::get('/', function () {
    return view('index');
});


Route::get('/about', function (){
    return view('about');
});


Route::get('/resume', function (){
    return view('resume');
});


Route::get('/services', function (){
    return view('services');
});


Route::get('/contact', function (){
    return view('contact');
});


// Contact from
Route::get('/contactForm', [ContactUsFormController::class, 'createForm']);
Route::post('/contactForm', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
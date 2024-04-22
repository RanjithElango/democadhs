<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CovidFormController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\LabRequestController;
use App\Http\Controllers\RxRefillController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function() {
    // Clear route cache
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    // Clear compiled views
    Artisan::call('view:clear');
    // Clear configuration cache
    Artisan::call('config:cache');
    // Clear application cache
    Artisan::call('cache:clear');
    return 'Caches cleared successfully.';
});

Route::get('/', [FrontendController::class, 'home'])->name('index');
Route::get('/covid-screening', [FrontendController::class, 'covid_screen'])->name('covid-screen');
Route::get('/doctor-gaw-gonzalo', [FrontendController::class, 'doctor'])->name('doctor');
Route::get('/curriculum-vitae', [FrontendController::class, 'cv'])->name('cv');
Route::get('/speciality-service', [FrontendController::class, 'speciality_service'])->name('special-service');
Route::get('/lab-request', [FrontendController::class, 'lab_request'])->name('lab-request');
Route::get('/rx-refill', [FrontendController::class, 'rx_refill'])->name('rx-refill');
Route::get('/patient-support', [FrontendController::class, 'patient_support'])->name('patient-support');
Route::get('/forms', [FrontendController::class, 'forms'])->name('forms');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/diabetes', [FrontendController::class, 'diabetes'])->name('diabetes');
Route::get('/thyroid', [FrontendController::class, 'thyroid'])->name('thyroid');
Route::get('/pcos', [FrontendController::class, 'pcos'])->name('pcos');
Route::get('/ostoporosis', [FrontendController::class, 'ostoporosis'])->name('ostoporosis');
Route::get('/menopause', [FrontendController::class, 'menopause'])->name('menopause');
Route::get('/pituitary', [FrontendController::class, 'pituitary'])->name('pituitary');
Route::get('/testostrone', [FrontendController::class, 'testostrone'])->name('testostrone');
Route::get('/transgender', [FrontendController::class, 'transgender'])->name('transgender');
Route::get('/adrenal', [FrontendController::class, 'adrenal'])->name('adrenal');

Route::get('/service', [FrontendController::class, 'service'])->name('service');

Route::post('/covid', [CovidFormController::class, 'store'])->name('covid.store');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
Route::post('/labrequest', [LabRequestController::class, 'store'])->name('labrequest.store');
Route::post('/rxrefill', [RxRefillController::class, 'store'])->name('rxrefill.store');

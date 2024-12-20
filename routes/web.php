<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;

Route::get('/', function () {
    return view('home',[
        "title" => "home",
        "active" => "home"
    ]);
});

Route::get('/faq', function () {
    return view('faq',[
        "title" => "faq",
        "active" => "faq"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "contact",
        "active" => "contact"
    ]);
});

Route::get('/test', function () {
    return view('test',[
        "title" => "test",
        "active" => "test"
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "active" => "profile"
    ]);
});

Route::get('/klien', function () {
    return view('klien',[
        "title" => "klien",
        "active" => "klien"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "active" => "about"
    ]);
});
Route::get('/project', function () {
    return view('project',[
        "title" => "project",
        "active" => "project"
    ]);
});

Route::get('/partner', function () {
    return view('partner',[
        "title" => "partner",
        "active" => "partner"
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio',[
        "title" => "portofolio",
        "active" => "portofolio"
    ]);
});

Route::get('/register', function () {
    return view('auth.register',[
        "title" => "register",
        "active" => "register"
    ]);
});

// LOGIN LOGUOT
Route::get('/login', [LoginController::class, 'index' ] )->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate' ] );
Route::post('/logout', [LoginController::class, 'logout' ] );

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard.index',[
        "title" => "Dashboard",
        "active" => "dashboard"
    ]);
});


use App\Http\Controllers\OrderController;

Route::post('/test', [OrderController::class, 'store'])->name('order.store');

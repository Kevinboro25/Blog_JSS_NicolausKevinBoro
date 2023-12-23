<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\TerpopulerController;

Route::get('/', function () {
    return view('blog_jss.landingpage');
});

Route::get('LoginPage', function () {
    return view('auth.login');
});

Route::get('TerpopulerPage', [TerpopulerController::class, 'index']);
Route::get('TerpopulerPage{id}', [TerpopulerController::class, 'show']);

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ArtikelController::class)->prefix('artikels')->group(function () {
        Route::get('', 'index')->name('artikels');
        Route::get('create', 'create')->name('artikels.create');
        Route::post('store', 'store')->name('artikels.store');
        Route::get('show/{id}', 'show')->name('artikels.show');
        Route::get('edit/{id}', 'edit')->name('artikels.edit');
        Route::put('edit/{id}', 'update')->name('artikels.update');
        Route::delete('destroy/{id}', 'destroy')->name('artikels.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

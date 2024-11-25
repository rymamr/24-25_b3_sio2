<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return View::make('pages.home');
});

Route::get('/about', function () {
    return View::make('pages.about');
});

Route::get('/hello', function () {
    return 'Bonjour le monde!';
    });

Route::get('/schnaps', function () {
        return view('schnaps');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('genders', GenderController::class);

require __DIR__.'/auth.php';

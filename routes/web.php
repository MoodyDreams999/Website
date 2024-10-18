<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParserController;


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/declutter', function () {
    return view('declutter');
})->name('declutter');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/lifestyle', function () {
    return view('lifestyle');
})->name('lifestyle');

Route::get('/foreward', function () {
    return view('foreward');
})->name('foreward');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authentication routes
Auth::routes();

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
Route::get('/test-role', function () {
    return 'You have the correct role!';
})->middleware(['auth', 'role:Admin']);


Route::get('/', function () {
    return view('index');
})->name('secretRoute');

// Custom logout route if necessary
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Admin routes
Route::prefix('admin')->middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'manageUsers'])->name('admin.users.index');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    Route::get('/content', [AdminController::class, 'manageContent'])->name('admin.content.index');
});



Route::get('/upload', [ParserController::class, 'showForm'])->name('parse.form');
Route::post('/upload', [ParserController::class, 'uploadAndParse'])->name('parse.upload');


// Editor routes
Route::middleware(['auth', 'role:Editor'])->group(function () {
    Route::get('/editor/dashboard', [EditorController::class, 'index'])->name('editor.dashboard');
});

// User routes
Route::middleware(['auth', 'role:User'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/view_post', [HomeController::class, 'view_post']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/upload_post', [HomeController::class, 'upload']);
    Route::get('/delete_post/{id}', [HomeController::class, 'delete_post']);
    Route::get('/update_post/{id}', [HomeController::class, 'update_post']);
    Route::post('/confirm_update/{id}', [HomeController::class, 'confirm_update']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

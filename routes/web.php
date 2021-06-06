<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('registration', [RegistrationController::class, 'index']);
Route::post('registration',[RegistrationController::class, 'save']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('home');
});

// Route to TestController index1 action
Route::get('/test/index1', [TestController::class, 'index1']);

// Route to TestController index2 action
Route::get('/test/index2', [TestController::class, 'index2']);

// Route to TestController index3 action
Route::get('/test/index3', [TestController::class, 'index3']);

// Route to UserController index action
Route::get('/users', [UserController::class, 'index']);

// Route to UserController index2 action
Route::get('/users/index2', [UserController::class, 'index2']);


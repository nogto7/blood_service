<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [UserController::class, 'create']);
Route::post('/saveUser', [UserController::class, 'store']);

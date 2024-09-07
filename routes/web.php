<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', Login::class)->name('login');
    
    Route::get('/register', Register::class)->name('register');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return  'hello';
    })->name('home');
});

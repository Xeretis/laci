<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'home')->name('home');

Route::middleware('guest')->group(function () {
    Volt::route('/auth/login', 'auth.login')->name('login');
    Volt::route('/auth/register', 'auth.register')->name('register');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register.php', function () {
    // Handle registration logic
});

Route::post('/verify.php', function () {
    // Handle email verification logic
});

Route::post('/complete.php', function () {
    // Handle math problem submission logic
});
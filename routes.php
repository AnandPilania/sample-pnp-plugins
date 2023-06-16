<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
})->name('users.index');
Route::get('/users/create', function () {
})->name('users.create');

<?php

use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        notify()->success('welcome to admin dashboard');
        return view('backend.pages.dashboard.index');
    })->name('dashboard');
});
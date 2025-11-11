<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OthersController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/admin.php';


Route::controller(OthersController::class)->group(function () {
   Route::get('/migrate', 'migrate')->name('migration');
   Route::get('/clear', 'clear')->name('clear');
   Route::get('/composer', 'composer')->name('composer');
   Route::get('/iseed', 'iseed')->name('iseed');
});
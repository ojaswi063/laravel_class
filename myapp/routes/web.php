<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => '/home/data'], function() {
    Route::get('/fibonacci', HomeController::class . '@fibonacci');
    Route::get('/factorial/{num}', HomeController::class . '@factorial');
});






Route::group(['prefix' => '/interest'], function () {
    Route::get('/first', function () {
        return "Java is my favourite language";
    });

    Route::get('/sec', function () {
        return "I also like Python";
    });

    Route::get('/third', function () {
        return "I also like JavaScript";
    });
});
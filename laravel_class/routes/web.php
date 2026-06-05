<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/{lang}', function ($lang) {
    app()->setLocale($lang);
    // return view('welcome', ['message' => __('message.message')]);

    return __('message.welcome');
});




Route::group(['prefix' => 'user'], function () 
{
    Route::get('/register', [StudentController::class, 'register']);
    Route::post("/store", [StudentController::class, 'store']);    
    Route::get('/login', [StudentController::class, 'login']); 
    Route::get('/{id}', [StudentController::class, 'show_profile']);
});



Route::get("/users", [StudentController::class, 'index']);




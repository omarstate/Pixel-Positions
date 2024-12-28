<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

Route::middleware('guest')->group(function (){
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login' , [SessionController::class, 'create']);
    Route::post('/login' , [SessionController::class, 'store']);

});

Route::middleware('auth')->group(function (){
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs/create', [JobController::class, 'store']);
    Route::delete('/logout' , [SessionController::class, 'destroy']);
    Route::get('/profile' , [ProfileController::class, 'index']);
    Route::get('/profile/edit' , [ProfileController::class, 'edit']);
    Route::patch('/profile/edit' , [ProfileController::class, 'update']);
});


Route::get('/companies', [CompanyController::class, 'create']);
Route::get('/search', [SearchController::class, 'index']);
Route::get('/tags/{tag}', [TagController::class, 'index']);



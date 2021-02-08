<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/personal/{reference_key}', [\App\Http\Controllers\ApplicantController::class,'personal_edit']);
Route::post('/personal/{reference_key}', [\App\Http\Controllers\ApplicantController::class,'personal_update']);

Route::get('/', [\App\Http\Controllers\ApplicantController::class,'personal']);
Route::post('/', [\App\Http\Controllers\ApplicantController::class,'personal_save']);

Route::get('/firsttimeuser/{reference_key}',[\App\Http\Controllers\FirstTimeUserController::class,'firsttimeuser']);

Route::get('/education/{reference_key}', [\App\Http\Controllers\EducationController::class,'education']);
Route::post('/education/{reference_key}', [\App\Http\Controllers\EducationController::class,'education_save']);

Route::get('/email_return',function (){
    return new \App\Mail\ApplicantConfermationMail();
});

Route::get('/forge',[\App\Http\Controllers\Forge::class,'pull_all']);


<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group( ['namespace'=> 'Api'], function (){
    Route::get('get-preparations',   [ApiController::class, 'getPreparations']);
    Route::get('get-curriculums',    [ApiController::class,  'getCurriculums']);
    Route::get('get-presentations',  [ApiController::class, 'getPresentations']);
    Route::get('get-android-programs',[ApiController::class, 'getandroidPrograms']);
    Route::get('get-ios-programs',[ApiController::class, 'getIosPrograms']);
    Route::get('get-teacherGuides',  [ApiController::class, 'getTeacherGuides']);
    Route::get('get-CurriculumDistributions', [ApiController::class, 'getCurriculumDistributions']);
});

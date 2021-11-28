<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CurriculumController;
use App\Http\Controllers\Admin\CurriculumDistributionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PreparationController;
use App\Http\Controllers\Admin\PresentationController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\TeacherGuideController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\frontendController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//Front-end Routes
Route::get('/', [frontendController::class, 'index']);

//Login Route
Route::get('/login', function () {return view('auth.login');});


//Back-end Routes "Admin"
Auth::routes();
Auth::routes(['register' => false]);


Route::group(['middleware'=>'auth'], function (){

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('/preparations',  PreparationController::class);
    Route::resource('/presentations', PresentationController::class);
    Route::resource('/programs',      ProgramController::class);
    Route::resource('/teacherGuides',  TeacherGuideController::class);
    Route::resource('/curriculums',   CurriculumController::class);
    Route::resource('/curriculum-distributions', CurriculumDistributionController::class);
    Route::resource('/user',UserController::class);
    Route::resource('/SocialMedia',SocialMediaController::class);
});

Route::get('/{page}', [AdminController::class, 'index']);

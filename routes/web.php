<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;

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

Route::get('/',[FrontendController::class,'index'])->name('/');
Route::get('/student-signup',[FrontendController::class,'studentSignup'])->name('student-signup');



Route::get('/at-glance',[FrontendController::class,'atGlance'])->name('at-glance');
Route::get('/why-study-shs',[FrontendController::class,'whyStudies'])->name('why-study-shs');
Route::get('/message-minister',[FrontendController::class,'messageMinister'])->name('message-minister');
Route::get('/message-secretary',[FrontendController::class,'messageSecretary'])->name('message-secretary');
Route::get('/message-chairman',[FrontendController::class,'messageChairman'])->name('message-chairman');
Route::get('/message-headmaster',[FrontendController::class,'messageHeadmaster'])->name('message-headmaster');
Route::get('/teacher-info',[FrontendController::class,'teacherInfo'])->name('teacher-info');
Route::get('/staff-info',[FrontendController::class,'staffInfo'])->name('staff-info');

Route::get('/academic-calender',[FrontendController::class,'academicCl'])->name('academic-calender');
Route::get('/class-routine',[FrontendController::class,'classRoutine'])->name('class-routine');
Route::get('/syllabus',[FrontendController::class,'syllabus'])->name('syllabus');

Route::get('/admission-circular',[FrontendController::class,'admissionCircular'])->name('admission-circular');

Route::get('/media-class',[FrontendController::class,'mediaClass'])->name('media-class');
Route::get('/indore-game',[FrontendController::class,'indoreGame'])->name('indore-game');
Route::get('/library',[FrontendController::class,'library'])->name('library');
Route::get('/computer-club',[FrontendController::class,'computerClub'])->name('computer-club');
Route::get('/science-club',[FrontendController::class,'scienceClub'])->name('science-club');

Route::get('/photos',[FrontendController::class,'photos'])->name('photos');
Route::get('/videos',[FrontendController::class,'videos'])->name('videos');

Route::get('/contact',[FrontendController::class,'contact'])->name('contact');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

});

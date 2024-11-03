<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_Controller;
use App\Http\Controllers\teacher_Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchesController;
use App\Http\Controllers\enrollmentController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\reportController;
use App\Models\student;
use App\Models\teacher;
use App\Models\course;
use App\Models\batche;
use App\Models\enrollment;
use App\Models\payment;
use App;



// Route::view('/','\mainFolder\mainlayout');





Route::view('/addNew','\mainFolder\addrecord');
Route::get('/student',[student_Controller::class,'index']);
Route::post('/SaveRecord',[student_Controller::class,'SaveRecord']);
Route::get('/editRecord/{id}/edit',[student_Controller::class,'SeeUpdatePage']);
Route::put('/UpdateRecord/{id}/edit',[student_Controller::class,'SaveUpdateRecord']);
Route::get('/deleteRecord/{id}/delete',[student_Controller::class,'deleteRecord']);


Route::view('/addTeacher','\teacher\addteacher');
Route::get('/teacher',[teacher_Controller::class,'index']);
Route::post('/TeacherData',[teacher_Controller::class,'storeTeacherData']);
Route::get('/teacher/{id}/edit',[teacher_Controller::class,'showSingleRecord']);
Route::put('/teacher/{id}/update',[teacher_Controller::class,'StoreUpdateRecord']);
Route::get('/delete/{id}/delete',[teacher_Controller::class,'deleteRecord']);


Route::view('/AddCourse','\courses\addCourse');
Route::get('/courses',[CourseController::class,'index']);
Route::post('/SaveRecord',[CourseController::class,'SaveCourse']);
Route::get('/course/{id}/edit',[CourseController::class,'SeeUpdatePage']);
Route::put('/course/{id}/updated',[CourseController::class,'SaveUpdateRecord']);
Route::get('/course/{id}/delete',[CourseController::class,'deleteRecord']);

Route::resource('/batches',BatchesController::class);
Route::resource('/enrollments',enrollmentController::class);
Route::resource('/payments',paymentController::class);

Route::get('/report/{id}/report',[reportController::class,'report']);








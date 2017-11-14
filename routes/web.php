<?php

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


Route::get("/teacherSignup","teacherSignupController@viewTeacherSignup")->name("teacherSignupView");

Route::post("/teacherSignup","teacherSignupController@teacherSignup")->name("teacherSignup");

Route::get("/studentSignup","StudentController@viewStudentSignup")->name("studentSignupView");

Route::post("/studentSignup","StudentController@studentSignup")->name("studentSignup");
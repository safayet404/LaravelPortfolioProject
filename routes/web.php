<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'HomeIndex']);
Route::post('/contactSend',[HomeController::class,'ContactSend']);



Route::get('projects',[ProjectsController::class,'ProjectsPage']);
Route::get('/courses',[CoursesController::class,'CoursePage']);
Route::get('/terms',[TermsController::class,'TermsPage']);
Route::get('/policy',[PrivacyPolicyController::class,'PolicyPage']);

Route::get('/contact',[ContactController::class,'ContactPage']);
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;

Route::get('/',[AdminController::class,'index']);

Route::get('/forms',[AdminController::class,'forms']);
Route::get('/doctors',[DoctorController::class,'index']);

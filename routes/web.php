<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;


Route::get('/assignment', [AssignmentController::class, 'index']);

Route::get('/assignment/detail/{id}', [AssignmentController::class, 'detail']);

Route::get('/customer', [CustomerController::class, 'index']);

Route::get('/test-relation',[CustomerController::class,'index']);

Route::get('/profile', [ProfileController::class, 'index']);

?>
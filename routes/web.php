<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;


Route::get('/assignment', [AssignmentController::class, 'index']);

Route::get('/assignment/detail/{id}', [AssignmentController::class, 'detail']);

Route::get('/customer', [CustomerController::class, 'index']);

Route::get('/test-relation',[CustomerController::class,'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/post-customer', [PostController::class, 'postList']);

Route::get('/customer/likes', [LikeController::class, 'showLikedPosts']);

Route::get('/post/likes', [LikeController::class, 'showLikedPosts']);

Route::get('/customer/{id}/latest-comment', [CustomerController::class, 'showLatestComment']);

?>
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;

// use App\Http\Controllers\AssignmentController;
// use App\Http\Controllers\CustomerController;
// use App\Http\Controllers\LikeController;
// use App\Http\Controllers\PostController;
// // use App\Http\Controllers\ProfileController;



// Route::get('/assignment', [AssignmentController::class, 'index']);

// Route::get('/assignment/detail/{id}', [AssignmentController::class, 'detail']);

// Route::get('/customer', [CustomerController::class, 'index']);

// Route::get('/test-relation',[CustomerController::class,'index']);

// // Route::get('/profile', [ProfileController::class, 'index']);

// Route::get('/post-customer', [PostController::class, 'postList']);

// Route::get('/customer/likes', [LikeController::class, 'showLikedPosts']);

// Route::get('/post/likes', [LikeController::class, 'showLikedPosts']);

// Route::get('/customer/{id}/latest-comment', [CustomerController::class, 'showLatestComment']);

// Route::get(
//     '/customer/posts-customers-like/{customerId}',
//     [CustomerController::class, 'manyCommentThroughPost']
// );


// Route::get('/customer/post-customer-like', [CustomerController::class, 'latestCommentThroughPost']);


Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return 'Admin Page - Only admin can access';
})->middleware('check.email');

Route::get('/user1', function () {
    return 'Private Page - Only user1 can access';
})->middleware('check.password');



require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
	Route::get('/articles/create', [ArticleController::class, 'create']);
	Route::post('/articles/store', [ArticleController::class, 'store']);
});

?>
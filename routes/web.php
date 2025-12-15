<?php

use App\Http\Controllers\AssignmentController;

Route::get('/assignment', [AssignmentController::class, 'index']);

Route::get('/assignment/detail/{id}', [AssignmentController::class, 'detail']);

?>
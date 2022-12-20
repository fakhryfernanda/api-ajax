<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/blog", [PostController::class, "all"]);
Route::get("/blog/{id}", [PostController::class, "detail"]);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

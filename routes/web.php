<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});

Route::prefix("blog")->group(function(){
    Route::get('/', [PostController::class, 'index']);
});
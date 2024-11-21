<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\RecipeController;
use App\Http\Controllers\Api\v1\TagController;


Route::prefix('v1')->group(function(){
    Route::apiResource('categories',CategoryController::class);
    Route::apiResource('recipes',RecipeController::class); 
    Route::apiResource('tags',TagController::class);
});

<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v2\RecipeController;


Route::prefix('v2')->group(function(){
    Route::apiResource('recipes',RecipeController::class); 
});

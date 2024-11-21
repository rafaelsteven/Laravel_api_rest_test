<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use App\Http\Resources\RecipeResource;
use App\Models\Recipe;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use Illuminate\Support\Facades\Gate;


use Symfony\Component\HttpFoundation\Response;
class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::orderBy('id','DESC')
        ->with('category','tags','user')->paginate();
        return RecipeResource::collection($recipes);
    }
}

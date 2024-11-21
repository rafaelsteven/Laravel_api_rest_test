<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryCollection;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); 
        return  new CategoryCollection($categories);
    }

    public function show(Category $category)
    {
        $category = $category->load('recipes.category','recipes.tags','recipes.user');
        return  new CategoryResource($category);
    }
}

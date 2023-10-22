<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Recipe::join('fish', 'fish.id', '=', 'recipes.fish_id')
                    ->select('recipes.id', 'fish.fish_name', 'recipe_name', 'recipe_img')
                    ->orderBy('recipes.id', 'desc')
                    ->take(20)
                    ->get();
    }

    //showing just one recipe base on it's ID
    public function show(string $id)
    {
        return Recipe::join('fish', 'fish.id', '=', 'recipes.fish_id')
                    ->select('recipes.*', 'fish.fish_name')
                    ->where('recipes.id', '=', $id)
                    ->get();
    }

    //show all the recipe base on the fish id
    public function getAllById(string $id){
        return Recipe::join('fish', 'fish.id', '=', 'recipes.fish_id')
                    ->select('fish.fish_name', 'fish.fish_image', 'recipes.id', 'recipes.recipe_name', 'recipes.recipe_img')
                    ->where('fish_id', '=', $id)
                    ->orderBy('recipes.id', 'desc')
                    ->get();
    }


    
}

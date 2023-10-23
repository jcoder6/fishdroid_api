<?php

use App\Http\Controllers\FishController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TermController;
use App\Models\Recipe;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resources([
    'fishes' => FishController::class,
    'recipes' => RecipeController::class,
    'terms' => TermController::class,
    'nutritions' => NutritionController::class
]);
// Route::resource('fishes', FishController::class);
// Route::resource('recipes', RecipeController::class);
Route::get('/recipes/fishbyid/{id}', [RecipeController::class, 'getAllById']);
Route::get('/fishes/search/{name}', [FishController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

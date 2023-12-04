<?php

use App\Http\Controllers\FishController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HatcheryController;
use App\Http\Controllers\HatchVideoController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\TriviaController;
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
    'nutritions' => NutritionController::class,
    'trivia' => TriviaController::class,
    'hatchery' => HatcheryController::class,
    'game' => GameController::class,
    'message' => MessageController::class
]);
// Route::resource('fishes', FishController::class);
// Route::resource('recipes', RecipeController::class);
Route::get('/recipes/fishbyid/{id}', [RecipeController::class, 'getAllById']);
Route::get('/recipes/getRandomRecipe/{p}', [RecipeController::class, 'getAllRecipe']);
Route::get('/fishes/search/{name}', [FishController::class, 'search']);
Route::get('/fishes/random/', [FishController::class, 'random']);
Route::get('/fishes/pagination/{page}', [FishController::class, 'pagination']);
Route::get('/fishes/getRowCount/{count}', [FishController::class, 'getRowCount']);
Route::get('/terms/search/{term}', [TermController::class, 'search']);
Route::get('/hatchvideos/videobyid/{id}', [HatchVideoController::class, 'getAllById']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

namespace App\Http\Controllers;

use App\Models\Nutrition;
use Illuminate\Http\Request;

class NutritionController extends Controller
{
    public function show(string $id)
    {
        return Nutrition::where('fish_id', $id)->get();
    }
}

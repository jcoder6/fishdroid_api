<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\Request;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Fish::join('familynames', 'fish.family_name_id', '=', 'familynames.id')
                    ->select('fish.*', 'familynames.family_name as family_name')
                    ->orderBy('fish.id', 'desc')
                    ->take(15)
                    ->get();
    }

    public function show(string $id)
    {
        return Fish::join('familynames', 'fish.family_name_id', '=', 'familynames.id')
                    ->select('fish.*', 'familynames.family_name')
                    ->where('fish.id', $id)
                    ->get();
    }

    public function search(string $name){
        return Fish::join('familynames', 'fish.family_name_id', '=', 'familynames.id')
                ->select('fish.*', 'familynames.family_name')
                ->where('fish.fish_name', 'like', '%' . $name . '%')
                ->orWhere('familynames.family_name', 'like', '%' . $name . '%')
                ->orWhere('fish.local_name', 'like', '%'. $name .'%')
                ->orWhere('fish.scientific_name', 'like', '%'. $name .'%')
                ->get();
    }
}

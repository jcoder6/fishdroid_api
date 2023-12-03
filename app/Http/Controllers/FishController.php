<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\Request;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     * get 15 random fishes for fetured fish in home screen
     */
    public function index()
    {
        return Fish::join('familynames', 'fish.family_name_id', '=', 'familynames.id')
                    ->select('fish.*', 'familynames.family_name as family_name')
                    ->inRandomOrder()
                    ->take(15)
                    ->get();
    }

    //display a fish, also use this for pagination

    public function pagination(int $page) 
    {
        return Fish::join('familynames', 'fish.family_name_id', '=', 'familynames.id')
        ->select('fish.*', 'familynames.family_name as family_name')
        ->orderBy('fish.fish_name')
        ->offset(20 * $page)
        ->take(20)
        ->get();
    }

    // GET THE ROW COUNT FOR PAGINATION

    public function getRowCount() {
        return Fish::count();
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

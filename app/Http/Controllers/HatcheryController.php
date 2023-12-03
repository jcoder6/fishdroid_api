<?php

namespace App\Http\Controllers;

use App\Models\Hatchery;
use Illuminate\Http\Request;

class HatcheryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hatchery::all();
    }

    public function show(string $id)
    {
        return Hatchery::where('id', '=', $id)->get();
    }
}

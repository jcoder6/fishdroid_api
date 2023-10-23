<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Term::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Term::where('id', $id)->get();
    }
}

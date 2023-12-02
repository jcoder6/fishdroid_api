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
        return Term::orderBy('tech_term', 'ASC')->get();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Term::where('id', $id)->get();
    }

    /**
     * Display a listing of the resource.
     */
    public function search(string $term){
        return Term::where('tech_term', 'LIKE', '%' . $term . '%')
                    ->orderBy('tech_term', 'ASC')
                    ->get();
    }
}

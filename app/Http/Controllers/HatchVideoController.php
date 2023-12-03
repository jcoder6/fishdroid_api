<?php

namespace App\Http\Controllers;

use App\Models\HatchVideo;
use Illuminate\Http\Request;

class HatchVideoController extends Controller
{
    public function getAllById(int $id){
        return HatchVideo::where('fish_id', '=', $id)->get();
    }
}

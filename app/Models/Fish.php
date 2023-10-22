<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;
    protected $table = 'fish';
    // public $timestamps = false;
    // protected $fillable = [
    //     'fish_name',
    //     'scientific_name',
    //     'family_name_id',
    //     'local_name',
    //     'fish_image',
    //     'fish_info'
    // ];
}

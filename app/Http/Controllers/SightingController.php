<?php

namespace App\Http\Controllers;
use App\Models\Sighting;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;

class SightingController extends Controller
{
    public function index() {
        $sightings = Sighting::with('user', 'categoryRelation')->get(); 
        return view('home', compact('sightings'));
    }
}

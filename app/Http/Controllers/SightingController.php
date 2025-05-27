<?php

namespace App\Http\Controllers;
use App\Models\Sighting;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SightingController extends Controller
{
    public function index() {
        $sightings = Sighting::with('user', 'categoryRelation')->get(); 
        return view('home', compact('sightings'));
    }

    public function show() {
        $userId = Auth::id();

        $sightings = Sighting::with('user', 'categoryRelation')
            ->where('user_id', $userId)
            ->get();

        return view('profile', compact('sightings'));
    }

    public function rapport() {
        $categories = Category::get();
        return view('rapport', compact('categories'));
    }
}

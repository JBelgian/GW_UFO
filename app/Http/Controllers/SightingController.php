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

    public function sighting(Request $request) {
       $request->validate([
            'datetime' => ['required', 'date'],
            'category' => ['required', 'exists:categories,description'], // or use 'exists:categories,id' if you're using the ID
            'location' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:1000'],
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'], // Max 2MB
        ]);

        $imagePath = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('sightings', 'public');
        }

        // Create the Sighting
        $sighting = Sighting::create([
            'user_id' => auth()->id(),
            'date_time' => $request->input('datetime'),
            'location' => $request->input('location'),
            'description' => $request->input('description'),
            'category' => Category::where('description', $request->input('category'))->first()->id ?? null, // or just use 'category' if it's the id
            'photo' => $imagePath,
        ]);

        return redirect()->route('home');
    }
}

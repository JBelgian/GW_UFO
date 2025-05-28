<?php

namespace App\Http\Controllers;
use App\Models\Sighting;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SightingController extends Controller
{
    // Gets the sightings for the home page
    public function index() {
        $sightings = Sighting::with('user', 'categoryRelation')->get(); 
        return view('home', compact('sightings'));
    }

    // Gets user specific sightings for the profile page
    public function show() {
        $userId = Auth::id();

        $sightings = Sighting::with('user', 'categoryRelation')
            ->where('user_id', $userId)
            ->get();

        return view('profile', compact('sightings'));
    }

    // Gets the categories for the sightings rapportation
    public function rapport() {
        $categories = Category::get();
        return view('rapport', compact('categories'));
    }

    // Saves a sighting to the database
    public function sighting(Request $request) {
        // Checks if request is valid + sets error specific messages
        $request->validate([
            'datetime' => ['required', 'date'],
            'category' => ['required', 'exists:categories,description'],
            'location' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:1000'],
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
        ], [
            'datetime.required' => 'De datum en tijd zijn verplicht.',
            'datetime.date' => 'Voer een geldige datum en tijd in.',
            'category.required' => 'Selecteer een categorie.',
            'category.exists' => 'De gekozen categorie bestaat niet.',
            'location.required' => 'De locatie is verplicht.',
            'location.max' => 'De locatie mag maximaal 50 tekens bevatten.',
            'description.required' => 'De beschrijving is verplicht.',
            'description.max' => 'De beschrijving mag maximaal 1000 tekens bevatten.',
            'image.image' => 'Het bestand moet een afbeelding zijn.',
            'image.mimes' => 'De afbeelding moet een JPEG of PNG bestand zijn.',
            'image.max' => 'De afbeelding mag niet groter zijn dan 2MB.',
        ]);

        // Determines the image path
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

        // Redirect
        return redirect()->route('home');
    }
}

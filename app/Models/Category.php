<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'description'
    ];

    /**
     * Get the sightings for the category.
     */
    public function sightings()
    {
        return $this->hasMany(Sighting::class, 'category', 'id');
    }
}

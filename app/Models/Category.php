<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function sightings(): HasMany 
    {
        return $this->hasMany(Sighting::class);
    }

    public $timestamps = false;
}

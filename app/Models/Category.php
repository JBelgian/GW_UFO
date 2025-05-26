<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function sighting() {
        return $this->hasOne(Sighting::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sighting extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'date_time',
        'location',
        'description',
        'category'
    ];
}

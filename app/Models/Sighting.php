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

    /**
     * Get the user that owns the sighting.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category that owns the sighting.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}

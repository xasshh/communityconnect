<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // Add the name and other fields you want to allow for mass assignment
    protected $fillable = [
        'name',        // User's name
        'testimonial',     // Testimonial message
        'image_path',  // Path for uploaded image
    ];
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

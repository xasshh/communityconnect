<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'name',         // Author's name
        'title',        // Blog post title
        'content',      // Blog post content
        'image_path',   // Blog post image
        'profile_pic',  // Author's profile picture
        'user_id',      // Associated user ID (if applicable)
    ];

    // If you have any relationships, you can define them here
    public function user()
    {
        return $this->belongsTo(User::class); // Assuming each blog post belongs to a user
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

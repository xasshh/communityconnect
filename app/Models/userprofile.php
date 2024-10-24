<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserProfile extends Model
{
    use HasFactory;
   

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'user_id',
        'profile_pic', // This will hold the path to the profile picture
        
    ];

    /**
     * Define the relationship with the User model.
     */
    public function user(): HasOne
    {
        return $this->belongsTo(User::class);
    }
}

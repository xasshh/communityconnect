<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;


    protected $table = 'forums';

    // The fields that can be mass-assigned
    protected $fillable = [
        'title', 'description', 'name',
    ];
    // A forum has many threads
    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id'); // 'user_id' is the foreign key in the forums table
    }

    /**
     * Define a relationship for comments (a forum has many comments).
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
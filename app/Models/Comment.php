<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Other model methods and properties

    /**
     * Define a relationship where a comment belongs to a forum.
     */
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    /**
     * Define a relationship where a comment belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

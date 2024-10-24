<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // Define the relationship to the thread
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    // Define the relationship to the user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

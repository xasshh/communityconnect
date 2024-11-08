<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetInvolved extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'name',
        'email',
        'phone',
        'availability',
        'skills',
    ];

    // Define relationships if needed
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


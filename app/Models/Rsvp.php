<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $table = 'rsvps';

    // The fields that can be mass-assigned
    protected $fillable = [
        
        'name',
        'email',
        'date',
        'space',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

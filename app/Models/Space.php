<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'capacity', 'price', 'location', 'slug', 'image_path'
    ];

    // In the Space model
public function user()
{
    return $this->belongsTo(User::class);
}
public function isAvailable()
{
    $now = now();
    return $this->start_time <= $now && $this->end_time >= $now;
}

}


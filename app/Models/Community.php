<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

     // Relationship with users
     public function users()
     {
         return $this->belongsToMany(User::class, 'community_user', 'community_id', 'user_id')->withTimestamps();
     }
     
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'location',
        'event_datetime',
        'category_id',
        'image_path',
         // assuming you have a relation to an organizer
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'datetime',
        'time' => 'datetime',
    ];

    /**
     * Get the organizer that owns the event.
     */
    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    /**
     * Get all of the users that are attending this event.
     */
    public function attendees()
    {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id')
                    ->withTimestamps();
    }

    /**
     * Scope a query to only include upcoming events.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', now())->orderBy('date', 'asc');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

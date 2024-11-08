<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
         'user_profile',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

   

    // Other model properties and methods...

    /**
     * Get the events the user has RSVP'd to.
     */
    public function rsvps()
    {
        return $this->belongsToMany(Event::class, 'rsvps', 'user_id', 'event_id');
    }
    public function reservations()
    {
        return $this->belongstoMany(Event::class,'reservations','id','name');
    }

//     public function reservations()
// {
//     return $this->hasMany(Reservation::class);
// }

    
    
    // Relationship with events
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_user', 'user_id', 'event_id')->withTimestamps();
        return $this->belongsToMany(Event::class, 'event_user')->withTimestamps();
        return $this->belongsToMany(Event::class, 'user_event'); // Assuming your pivot table is named 'user_event'
        return $this->belongsToMany(Event::class, 'user_id'); // Replace 'event_user' with your actual pivot table name
        return $this->belongsToMany(Event::class, 'event_user', 'user_id', 'event_id')
        ->withTimestamps();
            return $this->belongsToMany(Event::class, 'user_event', 'user_id', 'event_id');
        
    }

    // Relationship with reservations
  

    // Relationship with communities
    public function communities()
    {
        return $this->belongsToMany(Community::class, 'community_user', 'user_id', 'community_id')->withTimestamps();
    }

    public function joinedEvents()
{
    return $this->belongsToMany(Event::class, 'user_event', 'user_id', 'event_id'); // Assuming a pivot table 'event_user'
}
// User.php
public function category()
{
    return $this->belongsTo(Category::class);
}

public function profile()
{
    return $this->hasOne(UserProfile::class);
}
public function replies()
{
    return $this->hasMany(Reply::class);
}
public function followers()
{
    return $this->belongsToMany(User::class, 'follows', 'following_id', 'follower_id');
}

public function following()
{
    return $this->belongsToMany(User::class, 'follows', 'follower_id', 'following_id');
}

}

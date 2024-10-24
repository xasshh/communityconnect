<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvolvementResponse extends Model
{
    use HasFactory;

    protected $table = 'involvement_responses';

    protected $fillable = ['name', 'email', 'interest','phone','availability','skill' ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScholarship extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'scholarship_id',
        'year'
    ];
}

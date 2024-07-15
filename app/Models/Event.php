<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'featured_image', 'caption', 'description', 'date', 'start_time', 'stop_time', 'town', 'address', 'links'];
    protected $dates = ['date'];


}

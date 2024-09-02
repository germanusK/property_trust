<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = ['name', 'contact', 'email', 'address', 'description', 'service_id', 'town_id'];

    public function images()
    {
        # code...
        return $this->hasMany(ProjectImage::class, 'project_id');
    }

    public function service()
    {
        # code...
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function town()
    {
        # code...
        return $this->belongsTo(Town::class, 'town_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = ['name', 'contact', 'email', 'address', 'description', 'service_id'];

    public function images()
    {
        # code...
        return $this->hasMany(AssetImage::class, 'asset_id')->where('type', 'project');
    }

    public function service()
    {
        # code...
        return $this->belongsTo(Service::class, 'service_id');
    }
}

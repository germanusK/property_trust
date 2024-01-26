<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = ['name', 'caption', 'category_id', 'price', 'description', 'img_path'];
 
    public function images()
    {
        # code...
        return $this->hasMany(ServiceImage::class, 'service_id');
    }

    public function projects()
    {
        # code...
        return $this->hasMany(Project::class, 'service_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function property()
    {
        return $this->hasMany(Asset::class, 'service_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'parent_id'];

    protected $table = "categories";

    public function projects()
    {
        # code...
        return $this->hasManyThrough(Project::class, Service::class);
    }

    public function assets()
    {
        # code...
        return $this->hasManyThrough(Asset::class, Service::class);
    }

    public function services()
    {
        # code...
        return $this->hasMany(Service::class, 'category_id');
    }
}

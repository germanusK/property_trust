<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'price', 'address', 'description'];

    protected $table = "assets";

    function categories()
    {
        # code...
        return $this->belongsToMany(Category::class, AssetCategory::class);
    }

    public function grades()
    {
        # code...
        return $this->belongsToMany(Grade::class, AssetGrade::class);
    }

    public function images()
    {
        # code...
        return $this->hasMany(AssetImage::class, 'asset_id');
    }
}

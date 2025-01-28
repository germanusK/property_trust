<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'price', 'address', 'description', 'service_id', 'town_id'];

    protected $table = "assets";



    public function images()
    {
        # code...
        return $this->hasMany(AssetImage::class, 'asset_id');
    }

    public function service()
    {
        # code...
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function categories()
    {
        # code...
        return $this->belongsToMany(Category::class, 'asset_categories');
    }

    public function town()
    {
        # code...
        return $this->belongsTo(Town::class, 'town_id');
    }
}

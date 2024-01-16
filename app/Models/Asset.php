<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'price', 'address', 'description', 'service_id'];

    protected $table = "assets";



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

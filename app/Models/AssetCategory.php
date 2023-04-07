<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetCategory extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id', 'category_id'];

    protected $table = "asset_categories";

    public function asset()
    {
        # code...
        return $this->belongsTo(Asset::class, 'asset_id');
    }

    function category(){
        return $this->hasMany(Category::class, 'category_id');
    }
    
}

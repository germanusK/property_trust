<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetImage extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id', 'url', 'description'];

    protected $table = "asset_images";

    public function asset()
    {
        # code...
        return $this->belongsTo(Asset::class);
    }
}

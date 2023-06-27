<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = ['name', 'contact', 'email', 'description', 'icon_path'];

    public function images()
    {
        # code...
        return $this->hasMany(AssetImage::class, 'asset_id')->where('type', 'service');
    }
}

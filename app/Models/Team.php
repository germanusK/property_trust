<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Team extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'img_url', 'phone', 'position', 'media_links', 'email', 'password', 'status', 'mount'];
    protected $table = 'team';
    protected $dates = ['created_at', 'updated_at'];

    public function media_links(){
        return $this->media_links != null ? json_decode($this->media_links) : [];
    }
}

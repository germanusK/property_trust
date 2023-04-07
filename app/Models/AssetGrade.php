<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetGrade extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id', 'grade_id'];

    protected $table = "asset_grades";
}

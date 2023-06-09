<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Schedule extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'asset_id',
        'customer_id',
        'due_date',
        'status',
        'verified'
    ];

    protected $table = 'schedules';

    function property(){
        return $this->belongsTo(Asset::class, 'asset_id');
    }
    function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    
}

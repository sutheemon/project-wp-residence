<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_room extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_type_id',
        'name_room',
        'desc_room',
        'price_room'
    ];
}
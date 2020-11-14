<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inf_room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'room_build',
        'room_floor',
        'room_type_id',
        'room_status_id'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_room_status extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_status_id',
        'name_room_status'
    ];
}
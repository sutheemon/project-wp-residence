<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inf_room extends Model
{
    use HasFactory;

    protected $primary = 'room_id';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_id',
        'room_type_id',
        'room_status_id',
        'user_id',
        'room_build',
        'room_floor'
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $foreignkey = [
        'room_type_id',
        'room_status_id',
        'user_id'
    ];
}
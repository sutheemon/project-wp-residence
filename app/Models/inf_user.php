<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inf_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'id_card',
        'F_name',
        'L_name',
        'phone_number',
        'email',
        'address'
    ];
}
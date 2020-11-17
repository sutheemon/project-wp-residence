<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_role extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_type_id',
        'name_role'
    ];
}
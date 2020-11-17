<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acl_function extends Model
{
    use HasFactory;
    protected $fillable = [
        'function_id',
        'name_function'
    ];
}
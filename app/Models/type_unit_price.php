<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_unit_price extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_price_id',
        'name_price',
        'value_unit'
    ];
}
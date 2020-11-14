<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_bill_status extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_status_id',
        'name_ bill_status'
    ];
}
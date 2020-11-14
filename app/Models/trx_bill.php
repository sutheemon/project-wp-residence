<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trx_bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'bill_id',
        'room_id',
        'bill_date',
        'bill_status_id',
        'total_payment',
        'water_price',
        'unit_price_water_id',
        'unit_price_electric _id',
        'electric_price'
    ];
}
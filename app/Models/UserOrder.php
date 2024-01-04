<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $fillable = [
        'user_id',
        'order_date',
        'total_amount',
        'addresses_id',
        'order_status',
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'user_order_id',
        'menu_item_id',
        'quantity',
        'customizations',
        'subtotal',
    ];

    use HasFactory;
}

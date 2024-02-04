<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_id',
        'item_name',
        'qty',
        'price',
        'total_price',
    ];
}

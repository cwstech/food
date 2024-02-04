<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'table_no',
        'table_url',
    ];
}

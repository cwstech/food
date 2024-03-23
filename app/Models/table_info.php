<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class table_info extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'table_no',
        'table_url',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'name',
        'created_at',
    ];
    public function items()
    {
        return $this->hasMany(Item::class, 'cat_id', 'id');
    }
}

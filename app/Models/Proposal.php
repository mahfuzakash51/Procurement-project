<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_id',
        'order_item_id',
        'description',
        'user_id',
        'cost',
        'status',
    ];
}

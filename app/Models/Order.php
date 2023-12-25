<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'food_order';
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'client_id',
        'fp_id'
    ];
}

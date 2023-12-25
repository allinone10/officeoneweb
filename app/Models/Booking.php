<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey = 'booking_id';
    protected $fillable = [
        'reference_no',
        'workspace_id',
        'package_id',
        'client_id',
        'arrival_date',
        'depature_date',
        'in_time',
        'out_time',
        'number_of_seat',
        'seat_numbers',
        'amount'
    ];
}

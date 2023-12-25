<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';
    protected $primaryKey = 'client_id';
    protected $fillable = [
        'first_name',
        'last_name',
        'nic',
        'phone_no',
        'land_line',
        'email',
        'birthday',
        'job'
    ];

    public function clientLogin() : HasOne
    {
        return $this->hasOne(ClientLogin::class);
    }
}

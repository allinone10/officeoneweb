<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ClientLogin extends Model
{
    use HasFactory;
    protected $table = 'client_login';
    protected $primaryKey = 'account_id';
    protected $fillable = [
        'client_id',
        'email',
        'password'
    ];

    public function client() : HasOne
    {
        return $this->hasOne(Client::class);
    }
}

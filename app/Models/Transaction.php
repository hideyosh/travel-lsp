<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function Metode_pembayaran()
    {
        return $this->belongsTo(Metode_pembayaran::class, 'pembayrans_id');
    }

    public function Travel_packages()
    {
        return $this->belongsTo(Travel_packages::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }


}

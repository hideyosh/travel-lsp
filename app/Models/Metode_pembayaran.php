<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metode_pembayaran extends Model
{
    use HasFactory;
    protected $guarded = [
       'id'
    ];

    public function Transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}

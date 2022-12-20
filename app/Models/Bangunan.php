<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $fillable = ['user_id', 'total', 'status'];

    public function items()
    {
        return $this->hasMany(KeranjangItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

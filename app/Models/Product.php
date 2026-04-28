<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function purchaseDetails()
    {
        return $this->hasMany(Purchase_Detail::class, 'id_barang');
    }
}

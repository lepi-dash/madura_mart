<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';

    protected $fillable = [
        'no_nota',
        'tgl_nota',
        'id_distributor',
        'total_bayar'
    ];

    public function purchaseDetails()
    {
        return $this->hasMany(Purchase_Detail::class, 'id_pembelian');
    }

    public function distributor()
    {
        return $this->belongsTo(Distributor::class);
    }
}

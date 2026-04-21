<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';

    // Izinkan semua kolom ini diisi. Nama harus SAMA PERSIS dengan di phpMyAdmin
    protected $fillable = [
        'no_nota', 'id_distributor', 'id_barang', 'harga_beli', 
        'margin_jual', 'harga_jual', 'jumlah_beli', 'sub_total', 
        'total_bayar', 'stok', 'tgl_nota', 'foto_barang'
    ];
}
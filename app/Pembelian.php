<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'table_pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $fillable = [
        'id_pelanggan',
        'id_menu',
        'harga_menu',
        'no_hp_pelanggan',
        'alamat_pelanggan',
        'total_pembelian',
        'tanggal_pembelian'
      ];
    public $timestamps = false;
}

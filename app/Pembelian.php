<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'table_pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $fillable = [
        'id_pelanggan',
        'id_makanan',
        'id_minuman',
        'jumbel_makanan',
        'jumbel_minuman',
        'alamat_pelanggan',
        'total_pembelian'
      ];
    public $timestamps = false;
}

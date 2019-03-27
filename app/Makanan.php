<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = 'table_makanan';
    protected $primaryKey = 'id_makanan';
    protected $fillable = [
        'nama_makanan',
        'topping_makanan',
        'gambar_makanan',
        'icon_makanan',
        'deskripsi_makanan',
        'harga_makanan',
        'stok_makanan'
      ];
    public $timestamps = false;
}

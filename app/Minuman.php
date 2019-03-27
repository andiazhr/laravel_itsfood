<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    protected $table = 'table_minuman';
    protected $primaryKey = 'id_minuman';
    protected $fillable = [
        'nama_minuman',
        'gambar_minuman',
        'icon_minuman',
        'deskripsi_minuman',
        'harga_minuman',
        'stok_minuman'
      ];
    public $timestamps = false;
}

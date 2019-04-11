<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UsersPelanggan;
use App\Menu;

class Pembelian extends Model
{
    protected $table = 'table_pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $fillable = [
        'id_pelanggan',
        'id_menu',
        'harga_menu',
        'jumbel_menu',
        'no_hp_pelanggan',
        'alamat_pelanggan',
        'total_pembelian',
        'tanggal_pembelian'
      ];
    public $timestamps = false;

    public function Pelanggan()
    {
      return $this->belongsTo(UsersPelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    public function Menu()
    {
      return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
    }
}

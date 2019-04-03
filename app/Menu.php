<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'table_menu';
    protected $primaryKey = 'id_menu';
    protected $fillable = [
        'nama_menu',
        'tipe_menu',
        'gambar_menu',
        'icon_menu',
        'deskripsi_menu',
        'harga_menu',
      ];
    public $timestamps = false;
}

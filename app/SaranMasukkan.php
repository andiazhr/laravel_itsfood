<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaranMasukkan extends Model
{
    protected $table = 'saran_masukkan';
    protected $primaryKey = 'id_sm';
    protected $fillable = [
        'id_pelanggan',
        'saran_masukkan'
      ];

      public function Pelanggan()
    {
      return $this->belongsTo(UsersPelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }
}

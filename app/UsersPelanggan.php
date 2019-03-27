<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersPelanggan extends Model
{
    protected $table = 'table_users_pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [
        'nama_pelanggan',
        'username',
        'email_pelanggan',
        'password'
      ];
    public $timestamps = false;
}

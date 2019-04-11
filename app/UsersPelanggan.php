<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Pembelian;

class UsersPelanggan extends Authenticatable
{
  use Notifiable;
    
  protected $guard = 'pelanggan';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $table = 'table_users_pelanggan';
  protected $primaryKey = 'id_pelanggan';
  protected $fillable = [
      'nama_pelanggan', 'username', 'email_pelanggan', 'password',
  ];
  
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
  
  /**
   * Add a mutator to ensure hashed passwords
   */
  public function setPasswordAttribute($password)
  {
      $this->attributes['password'] = bcrypt($password);
  }

  public function Pelanggan(){
    return $this->hasMany(Pembelian::class, 'id_pelanggan', 'id_pelanggan');
  }
}

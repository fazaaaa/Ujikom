<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $fillable = ['nama','alamat','telepon','status','username','password',
    'akses'];
     public $timetamps = 'true';

     public function penjualan(){
         return $this->hasMany('App\Penjualan','id_kasir');
     }
}

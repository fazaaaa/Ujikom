<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['id_buku','id_kasir','jumlah','total','tanggal'];
    public $timetamps = 'true';

    public function buku(){
        return $this->belongsTo('App\Buku','id_buku');
    }
    public function kasir(){
        return $this->belonsTo('App\Kasir','id_kasir');
    }
}

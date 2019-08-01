<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
   protected $fillable = ['judul','noisbn','penulis','penerbit','tahun','stok',
   'harga_pokok','harga_jual','ppn','diskon'];
    public $timetamps = 'true';

    public function pasok(){
        return $this->hasmany('App\Pasok','id_buku');
    }
    public function penjualan(){
        return $this->hasmany('App\Penjualan','id_buku');
    }
}

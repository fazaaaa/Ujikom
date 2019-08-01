<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    protected $fillable = ['nama_distributor','alamat','telepon'];
     public $timetamps = 'true';

     public function pasok(){
         return $this->hasMany('App/Pasok','id_distributor');
     }
}
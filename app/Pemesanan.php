<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = ['tanggal_pemesanan','tanggal_pengembalian','customer_id','mobil_id','supir_id'];
    public $timestamps = true;

  
}

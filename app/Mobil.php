<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['nama','perseneling','plat_no','warna','tahun_keluaran','harga','stock','merk_id'];
    public $timestamps = true;

    public function Merk()
    {
    	return $this->belongsTo('App\Merk','merk_id');
    }

    public function Supir()
    {
    	return $this->belongsToMany('App\Supir','bookings','mobil_id','supir_id');
    }
}

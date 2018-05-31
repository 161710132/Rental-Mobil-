<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    protected $fillable = ['nama','alamat','umur','harga'];
    public $timestamps = true;

    public function Mobil()
    {
    	return $this->belongsToMany('App\Mobil','bookings','mobil_id','supir_id');
    }
}

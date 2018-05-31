<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['tanggal_pemesanan','tanggal_pengembalian'];
    public $timestamps = true;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['nama','alamat','no_nik','no_hp'];
    public $timestamps = true;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporanproduksi extends Model
{
    protected $fillable = ['tanggal', 'populasi', 'berat_telur', 'telur'];
}

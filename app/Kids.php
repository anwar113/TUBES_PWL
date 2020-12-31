<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kids extends Model
{
    protected $fillable = ['nama_produk','keterangan','harga','ukuran','jenis','stok','gambar'];
}

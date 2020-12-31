<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Men extends Model
{
    protected $fillable = ['nama_produk','keterangan','harga','ukuran','jenis','stok','gambar'];
}

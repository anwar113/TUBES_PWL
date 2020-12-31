<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
     protected $fillable = ['id_produk','nama_produk','kategori_produk','gambar','harga','nama_pembeli','no_telepon_pembeli','alamat_pembeli','ukuran','total_harga','status'];
}

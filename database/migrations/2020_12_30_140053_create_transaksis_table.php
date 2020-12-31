<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_produk');
            $table->String('nama_produk');
            $table->String('kategori_produk');
            $table->String('gambar');
            $table->integer('harga');
            $table->String('nama_pembeli');
            $table->String('no_telepon_pembeli');
            $table->String('alamat_pembeli');
            $table->integer('jumlah_beli');
            $table->String('ukuran');
            $table->integer('total_harga');
            $table->String('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}

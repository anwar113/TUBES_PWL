<?php

use Illuminate\Database\Seeder;

class MenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Men::insert([
            [
              'nama_produk' => 'Kaos Dreambirds Artwear',
              'keterangan' =>  'Bahannya sangat berkualitas dan nyaman dipakai',
              'harga' => '200000',
              'jenis' => 'Kaos lengan pendek',
              'ukuran' => 'L',
              'stok' => '100',
              'gambar' => 'img/terbaru1.jpg'
            ],
        ]);
    }
}

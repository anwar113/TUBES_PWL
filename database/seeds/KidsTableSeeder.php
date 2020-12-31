<?php

use Illuminate\Database\Seeder;

class KidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kids::insert([
            [
              'nama_produk' => 'Kaos I Love Indonesia Special 2019 Limited Edition',
              'keterangan' =>  'Bahannya sangat berkualitas dan nyaman dipakai, stok untuk ukuran S = 15, M = 5, L = 25, XL = 5',
              'harga' => '135000',
              'jenis' => 'Kaos lengan pendek',
              'ukuran' => 'S,M,L,XL',
              'stok' => '50',
              'gambar' => url("img/kidsLenganPendek1.jpg")
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class Komen1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen1::insert([
            [
              'nama' => 'Dhika Ainul Luthfi',
              'nama_produk' =>  'Kaos Navy Motif Need more space',
              'komentar' => 'Barang yang dateng emang sesuai dengan gambarnya serta nyaman dipakai',
            ],
        ]);
    }
}

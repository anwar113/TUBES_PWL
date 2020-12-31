<?php

use Illuminate\Database\Seeder;

class Komen4TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen4::insert([
            [
              'nama' => 'Dhika Ainul Luthfi',
              'nama_produk' =>  'JAKET GUNUNG PRIA OUTDOOR WATERPROOF',
              'komentar' => 'Jaketnya anti air dan hangat banget saat dipakai',
           ],
      ]);
    }
}

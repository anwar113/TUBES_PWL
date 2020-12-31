<?php

use Illuminate\Database\Seeder;

class Komen8TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen8::insert([
            [
              'nama' => 'Vinka Amalia S',
              'nama_produk' =>  'Jaket Rimas Fleece',
              'komentar' => 'Jaketnya nyaman banget saat dipakai serta hangat',
           ],
      ]);
    }
}

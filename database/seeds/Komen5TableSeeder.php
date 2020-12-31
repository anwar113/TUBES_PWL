<?php

use Illuminate\Database\Seeder;

class Komen5TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen5::insert([
            [
              'nama' => 'Vinka Amalia S',
              'nama_produk' =>  'Kaos Herschel',
              'komentar' => 'Memang bahannya sangat berkualitas dan nyaman saat dipakai',
           ],
      ]);
    }
}

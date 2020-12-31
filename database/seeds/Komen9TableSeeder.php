<?php

use Illuminate\Database\Seeder;

class Komen9TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen9::insert([
            [
              'nama' => 'Vinka Amalia S',
              'nama_produk' =>  'Gamis Elzatta',
              'komentar' => 'Motifnya bagus banget dan nyaman dipakai',
           ],
      ]);
    }
}

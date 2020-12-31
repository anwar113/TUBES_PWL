<?php

use Illuminate\Database\Seeder;

class Komen2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen2::insert([
            [
              'nama' => 'Dhika Ainul Luthfi',
              'nama_produk' =>  'Kaos Navy Motif Need more space',
              'komentar' => 'Desainnya memang trendi dan kekinian tidak rugi untuk membelinya',
           ],
      ]);
    }
}

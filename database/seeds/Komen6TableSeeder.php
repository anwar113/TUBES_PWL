<?php

use Illuminate\Database\Seeder;

class Komen6TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen6::insert([
            [
              'nama' => 'Vinka Amalia S',
              'nama_produk' =>  'Kaos long sleeve',
              'komentar' => 'Bajunya sesuai deskripsi dangat bagus dan trendi',
           ],
      ]);
    }
}

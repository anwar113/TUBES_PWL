<?php

use Illuminate\Database\Seeder;

class Komen7TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen7::insert([
            [
              'nama' => 'Vinka Amalia S',
              'nama_produk' =>  'Sweater Hush Puppies',
              'komentar' => 'Sweaternya nyaman banget saat dipakai serta hangat',
           ],
      ]);
    }
}

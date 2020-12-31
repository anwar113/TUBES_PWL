<?php

use Illuminate\Database\Seeder;

class Komen3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen3::insert([
            [
              'nama' => 'Dhika Ainul Luthfi',
              'nama_produk' =>  'Jaket Sweater Sweater Hoodie Pria Morte Fleece - Hitam',
              'komentar' => 'bahan kainnya lembut banget nyaman dipakai',
           ],
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class Komen13TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen13::insert([
            [
              'nama' => 'Saiful anwar',
              'nama_produk' =>  'U.S NAVY Marinir N.I.R N.I.R',
              'komentar' => 'Jaketnya bagus banget berasa seperti anak menjadi tentara angakatan laut',
           ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class Komen12TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen12::insert([
            [
              'nama' => 'Saiful anwar',
              'nama_produk' =>  'Sweater Cloudy Mody Lovely',
              'komentar' => 'Sweaternya bagus dan nyaman serta hangat saat dipakai',
           ],
        ]);
    }
}

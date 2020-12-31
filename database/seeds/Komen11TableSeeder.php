<?php

use Illuminate\Database\Seeder;

class Komen11TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen11::insert([
            [
              'nama' => 'Saiful anwar',
              'nama_produk' =>  'INFI KIDS LONG BROWN GRAY',
              'komentar' => 'Kaosnya bagus banget dan kekinian serta nyaman dipakai',
           ],
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class Komen10TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Komen10::insert([
            [
              'nama' => 'Saiful anwar',
              'nama_produk' =>  'Kaos I Love Indonesia Special 2019 Limited Edition',
              'komentar' => 'Kaosnya bagus banget cocok untuk sikecil',
           ],
      ]);
    }
}

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kids;
use Faker\Generator as Faker;

$factory->define(Kids::class, function (Faker $faker) {
    return [
        'nama_produk' => $faker->sentence(),
        'keterangan' => $faker->realText(2000),
        'harga' => $faker->integer(),
        'jenis' => $faker->sentence(),
        'ukuran' => $faker->sentence(),
        'stok' => $faker->integer(),
        'gambar' => $faker->gambar('public/img', 400, 300, null, false)
    ];
});

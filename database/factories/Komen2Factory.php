<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Komen2;
use Faker\Generator as Faker;

$factory->define(Komen2::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence(),
        'nama_produk' => $faker->sentence(),
        'komentar' => $faker->realText(2000),
    ];
});

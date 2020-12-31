<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Baru;
use Faker\Generator as Faker;

$factory->define(Baru::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence(),
        'harga' =>$faker->integer(),
        'gambar' => $faker->gambar('public/img', 400, 300, null, false)
    ];
});

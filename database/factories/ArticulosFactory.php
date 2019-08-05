<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
      "titulo" => $faker->sentence(10),
      "foto" => $faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
      "descripcion" => $faker->sentence(20),
      "precio" => $faker->numberBetween(100,2000),
    ];
});

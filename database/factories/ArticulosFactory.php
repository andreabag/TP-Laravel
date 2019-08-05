<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
      "titulo" => $faker->sentence(2),
      "foto" => 'http://via.placeholder.com/200x200',
      "descripcion" => $faker->sentence(8),
      "precio" => $faker->numberBetween(100,2000),
    ];
});

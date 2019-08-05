<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
      "name" => $faker->sentence(6),
      "surname" => $faker->sentence(6),
      "user" => $faker->sentence(8),
      "birthdate" => $faker->date(),
      "avatar" => $faker->sentence(10),
      "province" => $faker->sentence(6),
      "password" => $faker->sentence(10),
      "email" => $faker->sentence(15)
    ];
});

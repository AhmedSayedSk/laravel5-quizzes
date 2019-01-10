<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->safeEmail,
        "username" => $faker->name,
        "mobile" => $faker->name,
        "password" => str_random(10),
        "gender" => $faker->randomNumber(2),
        "role_id" => factory('App\Role')->create(),
        "remember_token" => $faker->name,
    ];
});

<?php

$factory->define(App\Name::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "description" => $faker->name,
        "module_id" => factory('App\Module')->create(),
        "reference_id" => $faker->randomNumber(2),
        "language_id" => factory('App\Language')->create(),
    ];
});

<?php

$factory->define(App\Language::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "symbol" => $faker->name,
    ];
});

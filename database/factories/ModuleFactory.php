<?php

$factory->define(App\Module::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "parent_id" => factory('App\Module')->create(),
    ];
});

<?php

$factory->define(App\Quiz::class, function (Faker\Generator $faker) {
    return [
        "slug" => $faker->name,
        "auth_id" => factory('App\User')->create(),
        "category_id" => factory('App\QuizCategory')->create(),
    ];
});

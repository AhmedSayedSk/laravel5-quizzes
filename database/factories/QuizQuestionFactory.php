<?php

$factory->define(App\QuizQuestion::class, function (Faker\Generator $faker) {
    return [
        "quiz_id" => factory('App\Quiz')->create(),
        "type_id" => factory('App\Type')->create(),
    ];
});

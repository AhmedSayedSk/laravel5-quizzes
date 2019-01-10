<?php

$factory->define(App\UserAnswer::class, function (Faker\Generator $faker) {
    return [
        "auth_id" => factory('App\User')->create(),
        "choice_id" => factory('App\QuizQuestionChoice')->create(),
        "answer" => $faker->name,
    ];
});

<?php

$factory->define(App\QuizQuestionChoice::class, function (Faker\Generator $faker) {
    return [
        "question_id" => factory('App\QuizQuestion')->create(),
        "is_answer" => 0,
    ];
});

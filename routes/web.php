<?php

Route::get('test', function () {
	$get_all_quizzes_with_his_questions_and_choices =
		App\Models\Quizzes\Quiz::with('category', 'questions', 'questions.type', 'questions.choices')->get();

    $get_users_with_special_type =
    	App\Models\Users\User::ofType('teacher')->with('type')->get();

    $get_names_of_current_quiz =
    	App\Models\Quizzes\Quiz::find(1)->names;

    $get_names_of_current_category =
    	App\Models\Quizzes\Category::find(1)->names;

    $get_names_of_current_language =
    	App\Models\System\Language::find(1)->names;

    $get_current_user_quiz_ids_by_user_id =
    	App\Models\Users\User::get_quizz_ids(5);

    return $get_current_user_quiz_ids_by_user_id;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
});
<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

        Route::resource('users', 'UsersController', ['except' => ['create', 'edit']]);

        Route::resource('user_answers', 'UserAnswersController', ['except' => ['create', 'edit']]);

        Route::resource('roles', 'RolesController', ['except' => ['create', 'edit']]);

        Route::resource('user_actions', 'UserActionsController', ['except' => ['create', 'edit']]);

        Route::resource('quizzes', 'QuizzesController', ['except' => ['create', 'edit']]);

        Route::resource('quiz_categories', 'QuizCategoriesController', ['except' => ['create', 'edit']]);

        Route::resource('quiz_questions', 'QuizQuestionsController', ['except' => ['create', 'edit']]);

        Route::resource('quiz_question_choices', 'QuizQuestionChoicesController', ['except' => ['create', 'edit']]);

        Route::resource('modules', 'ModulesController', ['except' => ['create', 'edit']]);

        Route::resource('types', 'TypesController', ['except' => ['create', 'edit']]);

        Route::resource('names', 'NamesController', ['except' => ['create', 'edit']]);

        Route::resource('languages', 'LanguagesController', ['except' => ['create', 'edit']]);

});

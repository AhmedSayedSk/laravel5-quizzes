<?php

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => '', 'as' => 'admin.'], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_answers', 'Admin\UserAnswersController');
    Route::post('user_answers_mass_destroy', ['uses' => 'Admin\UserAnswersController@massDestroy', 'as' => 'user_answers.mass_destroy']);
    Route::post('user_answers_restore/{id}', ['uses' => 'Admin\UserAnswersController@restore', 'as' => 'user_answers.restore']);
    Route::delete('user_answers_perma_del/{id}', ['uses' => 'Admin\UserAnswersController@perma_del', 'as' => 'user_answers.perma_del']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::post('user_actions_mass_destroy', ['uses' => 'Admin\UserActionsController@massDestroy', 'as' => 'user_actions.mass_destroy']);
    Route::resource('quizzes', 'Admin\QuizzesController');
    Route::post('quizzes_mass_destroy', ['uses' => 'Admin\QuizzesController@massDestroy', 'as' => 'quizzes.mass_destroy']);
    Route::post('quizzes_restore/{id}', ['uses' => 'Admin\QuizzesController@restore', 'as' => 'quizzes.restore']);
    Route::delete('quizzes_perma_del/{id}', ['uses' => 'Admin\QuizzesController@perma_del', 'as' => 'quizzes.perma_del']);
    Route::resource('quiz_categories', 'Admin\QuizCategoriesController');
    Route::post('quiz_categories_mass_destroy', ['uses' => 'Admin\QuizCategoriesController@massDestroy', 'as' => 'quiz_categories.mass_destroy']);
    Route::post('quiz_categories_restore/{id}', ['uses' => 'Admin\QuizCategoriesController@restore', 'as' => 'quiz_categories.restore']);
    Route::delete('quiz_categories_perma_del/{id}', ['uses' => 'Admin\QuizCategoriesController@perma_del', 'as' => 'quiz_categories.perma_del']);
    Route::resource('quiz_questions', 'Admin\QuizQuestionsController');
    Route::post('quiz_questions_mass_destroy', ['uses' => 'Admin\QuizQuestionsController@massDestroy', 'as' => 'quiz_questions.mass_destroy']);
    Route::post('quiz_questions_restore/{id}', ['uses' => 'Admin\QuizQuestionsController@restore', 'as' => 'quiz_questions.restore']);
    Route::delete('quiz_questions_perma_del/{id}', ['uses' => 'Admin\QuizQuestionsController@perma_del', 'as' => 'quiz_questions.perma_del']);
    Route::resource('quiz_question_choices', 'Admin\QuizQuestionChoicesController');
    Route::post('quiz_question_choices_mass_destroy', ['uses' => 'Admin\QuizQuestionChoicesController@massDestroy', 'as' => 'quiz_question_choices.mass_destroy']);
    Route::post('quiz_question_choices_restore/{id}', ['uses' => 'Admin\QuizQuestionChoicesController@restore', 'as' => 'quiz_question_choices.restore']);
    Route::delete('quiz_question_choices_perma_del/{id}', ['uses' => 'Admin\QuizQuestionChoicesController@perma_del', 'as' => 'quiz_question_choices.perma_del']);
    Route::resource('modules', 'Admin\ModulesController');
    Route::post('modules_mass_destroy', ['uses' => 'Admin\ModulesController@massDestroy', 'as' => 'modules.mass_destroy']);
    Route::post('modules_restore/{id}', ['uses' => 'Admin\ModulesController@restore', 'as' => 'modules.restore']);
    Route::delete('modules_perma_del/{id}', ['uses' => 'Admin\ModulesController@perma_del', 'as' => 'modules.perma_del']);
    Route::resource('types', 'Admin\TypesController');
    Route::post('types_mass_destroy', ['uses' => 'Admin\TypesController@massDestroy', 'as' => 'types.mass_destroy']);
    Route::post('types_restore/{id}', ['uses' => 'Admin\TypesController@restore', 'as' => 'types.restore']);
    Route::delete('types_perma_del/{id}', ['uses' => 'Admin\TypesController@perma_del', 'as' => 'types.perma_del']);
    Route::resource('names', 'Admin\NamesController');
    Route::post('names_mass_destroy', ['uses' => 'Admin\NamesController@massDestroy', 'as' => 'names.mass_destroy']);
    Route::post('names_restore/{id}', ['uses' => 'Admin\NamesController@restore', 'as' => 'names.restore']);
    Route::delete('names_perma_del/{id}', ['uses' => 'Admin\NamesController@perma_del', 'as' => 'names.perma_del']);
    Route::resource('languages', 'Admin\LanguagesController');
    Route::post('languages_mass_destroy', ['uses' => 'Admin\LanguagesController@massDestroy', 'as' => 'languages.mass_destroy']);
    Route::post('languages_restore/{id}', ['uses' => 'Admin\LanguagesController@restore', 'as' => 'languages.restore']);
    Route::delete('languages_perma_del/{id}', ['uses' => 'Admin\LanguagesController@perma_del', 'as' => 'languages.perma_del']);
});




//Routes For  Front-end webapp

$this->get('index', 'testFrontendController@returnview')->name('index');

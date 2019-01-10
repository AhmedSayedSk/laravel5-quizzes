<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: Users collection
        Gate::define('users_collection_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: User answers
        Gate::define('user_answer_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_answer_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_answer_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_answer_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_answer_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_action_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_action_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_action_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_action_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Quizzes collection
        Gate::define('quizzes_collection_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Quizzes
        Gate::define('quiz_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Quiz categories
        Gate::define('quiz_category_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_category_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_category_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_category_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Questions collection
        Gate::define('questions_collection_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Quiz questions
        Gate::define('quiz_question_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_question_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_question_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_question_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_question_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Quiz question choices
        Gate::define('quiz_question_choice_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_question_choice_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_question_choice_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_question_choice_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('quiz_question_choice_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: System
        Gate::define('system_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Modules
        Gate::define('module_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('module_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('module_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('module_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('module_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Types
        Gate::define('type_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('type_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('type_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('type_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('type_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Names
        Gate::define('name_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('name_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('name_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('name_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('name_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Languages
        Gate::define('language_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('language_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('language_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('language_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('language_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Constraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('type_id')
                ->references('id')->on('types')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });

        Schema::table('user_answers', function (Blueprint $table) {
            $table->foreign('auth_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('choice_id')
                ->references('id')->on('quiz_question_choices')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('modules', function (Blueprint $table) {
            $table->foreign('parent_id')
                ->references('id')->on('modules')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('types', function (Blueprint $table) {
            $table->foreign('module_id')
                ->references('id')->on('modules')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });

        Schema::table('names', function (Blueprint $table) {
            $table->foreign('module_id')
                ->references('id')->on('modules')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('language_id')
                ->references('id')->on('languages')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('quizzes', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')->on('quiz_categories')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('auth_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });

        Schema::table('quiz_questions', function (Blueprint $table) {
            $table->foreign('quiz_id')
                ->references('id')->on('quizzes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('type_id')
                ->references('id')->on('types')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });

        Schema::table('quiz_question_choices', function (Blueprint $table) {
            $table->foreign('question_id')
                ->references('id')->on('quiz_questions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }
}

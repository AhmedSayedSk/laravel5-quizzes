<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c34cf4dcf4efRelationshipsToUserAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_answers', function(Blueprint $table) {
            if (!Schema::hasColumn('user_answers', 'auth_id')) {
                $table->integer('auth_id')->unsigned()->nullable();
                $table->foreign('auth_id', '250583_5c34cf4b6d103')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('user_answers', 'choice_id')) {
                $table->integer('choice_id')->unsigned()->nullable();
                $table->foreign('choice_id', '250583_5c34ab766b17e')->references('id')->on('quiz_question_choices')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_answers', function(Blueprint $table) {
            
        });
    }
}

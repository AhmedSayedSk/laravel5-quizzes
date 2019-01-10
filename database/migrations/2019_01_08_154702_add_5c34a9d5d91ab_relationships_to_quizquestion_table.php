<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c34a9d5d91abRelationshipsToQuizQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quiz_questions', function(Blueprint $table) {
            if (!Schema::hasColumn('quiz_questions', 'quiz_id')) {
                $table->integer('quiz_id')->unsigned()->nullable();
                $table->foreign('quiz_id', '250573_5c34a8fe42f07')->references('id')->on('quizzes')->onDelete('cascade');
                }
                if (!Schema::hasColumn('quiz_questions', 'type_id')) {
                $table->integer('type_id')->unsigned()->nullable();
                $table->foreign('type_id', '250573_5c34a8fe534f1')->references('id')->on('types')->onDelete('cascade');
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
        Schema::table('quiz_questions', function(Blueprint $table) {
            
        });
    }
}

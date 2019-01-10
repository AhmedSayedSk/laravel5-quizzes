<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c34a9de96232RelationshipsToQuizQuestionChoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quiz_question_choices', function(Blueprint $table) {
            if (!Schema::hasColumn('quiz_question_choices', 'question_id')) {
                $table->integer('question_id')->unsigned()->nullable();
                $table->foreign('question_id', '250575_5c34a9729d5a8')->references('id')->on('quiz_questions')->onDelete('cascade');
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
        Schema::table('quiz_question_choices', function(Blueprint $table) {
            
        });
    }
}

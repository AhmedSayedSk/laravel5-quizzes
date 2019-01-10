<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c34ab785d255RelationshipsToUserAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_answers', function(Blueprint $table) {
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

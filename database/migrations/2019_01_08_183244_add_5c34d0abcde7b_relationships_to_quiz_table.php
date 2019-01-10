<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c34d0abcde7bRelationshipsToQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quizzes', function(Blueprint $table) {
            if (!Schema::hasColumn('quizzes', 'auth_id')) {
                $table->integer('auth_id')->unsigned()->nullable();
                $table->foreign('auth_id', '250574_5c34d0a912b5e')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('quizzes', 'category_id')) {
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', '250574_5c34a85a0b3a9')->references('id')->on('quiz_categories')->onDelete('cascade');
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
        Schema::table('quizzes', function(Blueprint $table) {
            
        });
    }
}

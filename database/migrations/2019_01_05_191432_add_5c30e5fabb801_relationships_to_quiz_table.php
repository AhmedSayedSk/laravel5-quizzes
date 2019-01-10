<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c30e5fabb801RelationshipsToQuizTable extends Migration
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
                $table->foreign('auth_id', '249266_5c30e5f926be9')->references('id')->on('users')->onDelete('cascade');
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

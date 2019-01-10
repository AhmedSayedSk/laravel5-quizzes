<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c34a4181b9ccRelationshipsToModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modules', function(Blueprint $table) {
            if (!Schema::hasColumn('modules', 'parent_id')) {
                $table->integer('parent_id')->unsigned()->nullable();
                $table->foreign('parent_id', '250563_5c34a41618282')->references('id')->on('modules')->onDelete('cascade');
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
        Schema::table('modules', function(Blueprint $table) {
            
        });
    }
}

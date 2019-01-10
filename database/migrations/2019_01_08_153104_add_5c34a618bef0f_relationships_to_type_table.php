<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c34a618bef0fRelationshipsToTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('types', function(Blueprint $table) {
            if (!Schema::hasColumn('types', 'module_id')) {
                $table->integer('module_id')->unsigned()->nullable();
                $table->foreign('module_id', '250564_5c34a47aaf481')->references('id')->on('modules')->onDelete('cascade');
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
        Schema::table('types', function(Blueprint $table) {
            
        });
    }
}

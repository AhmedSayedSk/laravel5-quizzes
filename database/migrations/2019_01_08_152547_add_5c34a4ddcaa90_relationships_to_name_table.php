<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c34a4ddcaa90RelationshipsToNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('names', function(Blueprint $table) {
            if (!Schema::hasColumn('names', 'module_id')) {
                $table->integer('module_id')->unsigned()->nullable();
                $table->foreign('module_id', '250565_5c34a4dc05f4d')->references('id')->on('modules')->onDelete('cascade');
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
        Schema::table('names', function(Blueprint $table) {
            
        });
    }
}

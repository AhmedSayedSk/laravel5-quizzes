<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546951133UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'role_id')) {
                $table->dropForeign('249257_5c30e3ff5c1a9');
                $table->dropIndex('249257_5c30e3ff5c1a9');
                $table->dropColumn('role_id');
            }
            
        });
Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'username')) {
                $table->string('username')->nullable();
                }
if (!Schema::hasColumn('users', 'mobile')) {
                $table->string('mobile')->nullable();
                }
if (!Schema::hasColumn('users', 'gender')) {
                $table->integer('gender')->nullable()->unsigned();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('mobile');
            $table->dropColumn('gender');
            
        });
Schema::table('users', function (Blueprint $table) {
                        
        });

    }
}

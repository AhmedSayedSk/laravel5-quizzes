<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	protected function truncate_table($tableName)
	{
	    \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
	    \DB::table($tableName)->truncate();
	    \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	/* truncate tables */
    	$tables = DB::select('SHOW TABLES');
        $db_name = DB::getDatabaseName();
        $db_prefix = DB::getTablePrefix();
        foreach($tables as $table) {
            $property = "Tables_in_" . $db_name;
            $this->truncate_table(substr($table->$property, strlen($db_prefix)));
        }

        /* seeding tables */
        $this->call(ModulesSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(LangaugesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(QuizCategoriesSeeder::class);
        $this->call(QuizzesSeeder::class);
    }
}

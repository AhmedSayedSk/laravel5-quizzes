<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		// Static migrations
        $this->call(ModulesSeeder::class);
        $this->call(LangaugesSeeder::class);
        $this->call(RoleSeed::class);
        $this->call(TypesSeeder::class);

        // Dependable migrations
        $this->call(UsersSeeder::class);
        $this->call(QuizCategoriesSeeder::class);
        $this->call(QuizzesSeeder::class);
        $this->call(UserActionSeed::class);
    }
}

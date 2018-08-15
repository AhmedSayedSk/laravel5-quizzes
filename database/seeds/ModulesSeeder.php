<?php

use Illuminate\Database\Seeder;
use App\Models\System\Module;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module = new Module;
        $module->title = "users";
        $module->save();

        $module = new Module;
        $module->title = "quizzes";
        $module->save();

        $module = new Module;
        $module->title = "quiz_categories";
        $module->save();

        $module = new Module;
        $module->title = "quiz_questions";
        $module->save();

        $module = new Module;
        $module->title = "quiz_question_choices";
        $module->save();
    }
}

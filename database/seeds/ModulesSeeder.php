<?php

use Illuminate\Database\Seeder;
use App\Module;

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
        $module->parent_id = NULL;
        $module->save();

        $module = new Module;
        $module->title = "quizzes";
        $module->parent_id = NULL;
        $module->save();

        $module = new Module;
        $module->title = "system";
        $module->parent_id = NULL;
        $module->save();

        $module = new Module;
        $module->title = "types";
        $module->parent_id = get_module_id('system');
        $module->save();

        $module = new Module;
        $module->title = "languages";
        $module->parent_id = get_module_id('system');
        $module->save();

        $module = new Module;
        $module->title = "names";
        $module->parent_id = get_module_id('system');
        $module->save();

        $module = new Module;
        $module->title = "categories";
        $module->parent_id = get_module_id('quizzes');
        $module->save();

        $module = new Module;
        $module->title = "questions";
        $module->parent_id = get_module_id('quizzes');
        $module->save();

        $module = new Module;
        $module->title = "choices";
        $module->parent_id = get_module_id('quizzes.questions');
        $module->save();
    }
}

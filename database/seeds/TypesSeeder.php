<?php

use Illuminate\Database\Seeder;
use App\Models\System\Type;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type;
        $type->title = "student";
        $type->module_id = 1; // users module
        $type->save();

        $type = new Type;
        $type->title = "teacher";
        $type->module_id = 1; // users module
        $type->save();

        $type = new Type;
        $type->title = "admin";
        $type->module_id = 1; // users module
        $type->save();

        $type = new Type;
        $type->title = "checkbox";
        $type->module_id = 4; // quizz questions module
        $type->save();

        $type = new Type;
        $type->title = "written";
        $type->module_id = 4; // quizz questions module
        $type->save();
    }
}

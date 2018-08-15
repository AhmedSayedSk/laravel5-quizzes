<?php

use Illuminate\Database\Seeder;
use App\Models\System\Language;

class LangaugesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lanauge = new Language;
        $lanauge->title = "ar";
        $lanauge->save();

        $lanauge = new Language;
        $lanauge->title = "en";
        $lanauge->save();
    }
}

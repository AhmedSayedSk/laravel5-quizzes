<?php

use App\Language;
use App\Name;
use Illuminate\Database\Seeder;

class LangaugesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$langs = ['ar', 'en'];

    	foreach ($langs as $lang) {
	        $lanauge = new Language;
	        $lanauge->title = $lang;
	        $lanauge->save();

	        $name = new Name;
	        $name->title = $lang == 'ar' ? 'العربية' : 'English';
	        $name->module_id = get_module_id('system.languages');
	        $name->reference_id = $lanauge->id;
	        $name->language_id = $lanauge->id;
	        $name->save();
    	}
    }
}

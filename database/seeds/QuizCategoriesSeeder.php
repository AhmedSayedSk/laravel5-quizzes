<?php

use Illuminate\Database\Seeder;
use App\Models\Quizzes\Category;

class QuizCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	foreach (range(1, 5) as $i) {
	        $category = new Category;
	        $category->icon = "icon$i";
	        $category->save();

	        $name = new App\Models\System\Name;
	        $name->title = $faker->sentence(3);
	        $name->module_id = get_module_id('categories');
	        $name->reference_id = $category->id;
	        $name->language_id = 2; // en
	        $name->save();
    	}
    }
}

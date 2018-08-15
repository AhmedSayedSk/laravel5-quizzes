<?php

use Illuminate\Database\Seeder;

class QuizzesSeeder extends Seeder
{
	protected function set_name($sentence_count, $module_id, $reference_id)
	{
		$faker = Faker\Factory::create();
		$name = new App\Models\System\Name;
        $name->title = $faker->sentence($sentence_count);
        $name->module_id = $module_id;
        $name->reference_id = $reference_id;
        $name->language_id = 2; // en
        $name->save();
	}

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 5) as $i) {
            $quiz = new App\Models\Quizzes\Quiz;
            $quiz->quiz_category_id = mt_rand(1, 5);
            $quiz->auth_id = 1;
            $quiz->save();
            $this->set_name(3, 2, $quiz->id); // quizzes module

            foreach (range(1, 10) as $j) {
	            $question = new App\Models\Quizzes\Question;
	            $question->image = mt_rand(0, 1) ? "image$j" : null;
	            $question->quiz_id = $quiz->id;
	            $question->type_id = mt_rand(4, 5);
	            $question->save();
	            $this->set_name(7, 4, $question->id); // quiz questions module

	            foreach (range(1, 3) as $k) {
		            $choice = new App\Models\Quizzes\QuestionChoice;
		            $choice->quiz_question_id = $question->id;
		            $choice->is_answer = mt_rand(0, 1);
		            $choice->save();
		            $this->set_name(3, 5, $choice->id); // quiz questions module
	            }
            }
        }
    }
}

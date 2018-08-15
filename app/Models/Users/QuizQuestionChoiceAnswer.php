<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class QuizQuestionChoiceAnswer extends Model
{
	const UPDATED_AT = null;
	protected $table = "user_quiz_question_choice_answers";

	public function user()
    {
        return $this->belongsTo("App\Models\Users\User");
    }

    public function question_choice()
    {
        return $this->belongsTo("App\Models\Quizzes\QuestionChoice");
    }
}

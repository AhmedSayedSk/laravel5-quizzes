<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class QuizQuestionChoiceAnswer extends Model
{
	public function user()
    {
        return $this->belongsTo("App\Models\Users\User");
    }

    public function question_choice()
    {
        return $this->belongsTo("App\Models\Quizzes\QuestionChoice");
    }
}

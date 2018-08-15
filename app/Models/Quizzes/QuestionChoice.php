<?php

namespace App\Models\Quizzes;

use Illuminate\Database\Eloquent\Model;

class QuestionChoice extends Model
{
	protected $table = "quiz_question_choices";
	public $timestamps = false;

	public function question()
    {
        return $this->belongsTo("App\Models\Quizzes\Question", 'quiz_question_id');
    }

	public function type()
    {
        return $this->belongsTo("App\Models\System\Type");
    }
}

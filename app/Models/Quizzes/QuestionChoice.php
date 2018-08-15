<?php

namespace App\Models\Quizzes;

use Illuminate\Database\Eloquent\Model;

class QuestionChoice extends Model
{
	protected $table = "quiz_question_choices";
	public $timestamps = false;

	public function quizz()
    {
        return $this->belongsTo("App\Models\Quizzes\Question");
    }

	public function type()
    {
        return $this->belongsTo("App\Models\System\Type");
    }
}

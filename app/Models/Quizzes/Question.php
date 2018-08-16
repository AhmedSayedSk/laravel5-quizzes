<?php

namespace App\Models\Quizzes;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $table = "quiz_questions";
	public $timestamps = false;
	public $appends = ['user_choice_ids'];

	public function quiz()
    {
        return $this->belongsTo("App\Models\Quizzes\Quiz");
    }

	public function type()
    {
        return $this->belongsTo("App\Models\System\Type");
    }

    public function choices()
    {
        return $this->hasMany("App\Models\Quizzes\QuestionChoice", 'quiz_question_id');
    }

    public function getNamesAttribute()
    {
    	return get_module_names(get_module_id('quiz_questions'), $this->id);
    }

    public function getUserChoiceIdsAttribute()
    {
    	return \App\Models\Users\QuizQuestionChoiceAnswer::whereIn('choice_id', $this->choices->pluck('id'))->pluck('choice_id');
    }
}

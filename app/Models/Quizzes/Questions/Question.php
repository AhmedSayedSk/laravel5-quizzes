<?php

namespace App\Models\Quizzes\Questions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

	const CREATED_AT = NULL;

    protected $table = "quiz_questions";
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
        return $this->hasMany("App\Models\Quizzes\Questions\Choice");
    }

    public function getNamesAttribute()
    {
    	return get_module_names(get_module_id('questions'), $this->id);
    }

    public function getUserChoiceIdsAttribute()
    {
    	return \App\Models\Users\QuizQuestionChoiceAnswer::whereIn('choice_id', $this->choices->pluck('id'))->pluck('choice_id');
    }
}

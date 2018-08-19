<?php

namespace App\Models\Quizzes\Questions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Choice extends Model
{
    use SoftDeletes;

    const CREATED_AT = NULL;

	protected $table = "quiz_question_choices";

	public function question()
    {
        return $this->belongsTo("App\Models\Quizzes\Questions\Question");
    }

	public function type()
    {
        return $this->belongsTo("App\Models\System\Type");
    }
}

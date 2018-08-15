<?php

namespace App\Models\Quizzes;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $table = "quiz_questions";
	public $timestamps = false;

	public function quizz()
    {
        return $this->belongsTo("App\Models\Quizzes\Quiz");
    }

	public function type()
    {
        return $this->belongsTo("App\Models\System\Type");
    }
}

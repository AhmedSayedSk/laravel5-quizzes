<?php

namespace App\Models\Quizzes;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	protected $table = "quizzes";

	public function auth()
    {
        return $this->belongsTo("App\Models\Users\User");
    }

	public function category()
    {
        return $this->belongsTo("App\Models\Quizzes\Category", 'quiz_category_id');
    }

    public function questions()
    {
        return $this->hasMany("App\Models\Quizzes\Question");
    }

    public function getNamesAttribute()
    {
    	return get_module_names(get_module_id('quizzes'), $this->id);
    }
}

<?php

namespace App\Models\Quizzes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use SoftDeletes;

	protected $table = "quizzes";

	public function auth()
    {
        return $this->belongsTo("App\Models\Users\User");
    }

	public function category()
    {
        return $this->belongsTo("App\Models\Quizzes\Category");
    }

    public function questions()
    {
        return $this->hasMany("App\Models\Quizzes\Questions\Question");
    }

    public function getNamesAttribute()
    {
    	return get_module_names(get_module_id('quizzes'), $this->id);
    }
}

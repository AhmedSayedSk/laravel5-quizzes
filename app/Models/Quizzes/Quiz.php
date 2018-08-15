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
        return $this->belongsTo("App\Models\Quizzes\Category");
    }
}

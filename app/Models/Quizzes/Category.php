<?php

namespace App\Models\Quizzes;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = "quiz_categories";

	public function getNamesAttribute()
    {
    	return get_module_names(get_module_id('quiz_categories'), $this->id);
    }
}

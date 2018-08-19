<?php

namespace App\Models\Quizzes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;

	protected $table = "quiz_categories";

	public function getNamesAttribute()
    {
    	return get_module_names(get_module_id('quizzes.categories'), $this->id);
    }
}

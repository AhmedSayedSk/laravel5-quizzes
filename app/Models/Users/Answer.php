<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	const UPDATED_AT = null;

	protected $table = "user_answers";

	public function user()
    {
        return $this->belongsTo("App\Models\Users\User");
    }

    public function choice()
    {
        return $this->belongsTo("App\Models\Quizzes\Questions\Choice");
    }
}

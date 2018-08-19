<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function type()
    {
        return $this->belongsTo("App\Models\System\Type");
    }

    public function scopeOfType($query, $type)
    {
    	$type = \App\Models\System\Type::where([
    		'module_id' => get_module_id('users'),
    		'title' => $type
    	])->first();

    	if($type)
        	return $query->where('type_id', $type->id);
    }

    public function choice_answers()
    {
    	return $this->belongsToMany("App\Models\Quizzes\Questions\Choice", "user_answers")
    		->with(['question', 'question.quiz']);
    }

    public static function get_quizz_ids($user_id)
    {
    	$choice_answers = self::find($user_id)->choice_answers;
    	$quizzes_ids = [];

    	foreach ($choice_answers as $answers) {
    		$quizzes_ids[] = $answers->question->quiz->id;
    	}

    	// reset array keys and block repeated values
    	return array_values(array_unique($quizzes_ids));
    }

    public function scopeFindQuizzes($query, $user_id)
    {
    	return \App\Models\Quizzes\Quiz::whereIn('id', $this->get_quizz_ids($user_id));
    }
}

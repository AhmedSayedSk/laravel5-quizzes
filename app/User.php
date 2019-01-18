<?php
namespace App;

use App\Quiz;
use App\Type;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $username
 * @property string $mobile
 * @property string $password
 * @property integer $gender
 * @property string $role
 * @property string $remember_token
*/
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name', 'email', 'username', 'mobile', 'password', 'gender', 'remember_token', 'role_id'];
    protected $hidden = ['password', 'remember_token'];

    public static function boot()
    {
        parent::boot();
        User::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }


    /**
     * Set attribute to money format
     * @param $input
     */
    public function setGenderAttribute($input)
    {
        $this->attributes['gender'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRoleIdAttribute($input)
    {
        $this->attributes['role_id'] = $input ? $input : null;
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }

    public function scopeOfType($query, $type)
    {
    	$type = Type::where([
    		'module_id' => get_module_id('users'),
    		'title' => $type
    	])->first();

    	if($type)
        	return $query->where('type_id', $type->id);
    }

    public function choice_answers()
    {
    	return $this->belongsToMany(QuizQuestionChoice::class, "user_answers", 'auth_id')
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
    	return Quiz::whereIn('id', $this->get_quizz_ids($user_id));
    }
}

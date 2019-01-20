<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserAnswer
 *
 * @package App
 * @property string $auth
 * @property string $choice
 * @property text $answer
*/
class UserAnswer extends Model
{
    use SoftDeletes;

    const UPDATED_AT = null;
    protected $fillable = ['answer', 'auth_id', 'choice_id'];
    protected $hidden = [];

    public static function boot()
    {
        parent::boot();
        UserAnswer::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAuthIdAttribute($input)
    {
        $this->attributes['auth_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setChoiceIdAttribute($input)
    {
        $this->attributes['choice_id'] = $input ? $input : null;
    }

    public function auth()
    {
        return $this->belongsTo(User::class, 'auth_id');
    }

    public function choice()
    {
        return $this->belongsTo(QuizQuestionChoice::class, 'choice_id')->withTrashed();
    }

}

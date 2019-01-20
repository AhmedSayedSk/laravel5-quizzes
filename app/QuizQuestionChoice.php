<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class QuizQuestionChoice
 *
 * @package App
 * @property string $image
 * @property string $question
 * @property tinyInteger $is_answer
*/
class QuizQuestionChoice extends Model
{
    use SoftDeletes;

    const CREATED_AT = NULL;
    protected $fillable = ['image', 'is_answer', 'question_id'];
    protected $hidden = [];

    public static function boot()
    {
        parent::boot();
        QuizQuestionChoice::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setQuestionIdAttribute($input)
    {
        $this->attributes['question_id'] = $input ? $input : null;
    }

    public function question()
    {
        return $this->belongsTo(QuizQuestion::class, 'question_id')->withTrashed();
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id')->withTrashed();
    }

}

<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class QuizQuestion
 *
 * @package App
 * @property string $image
 * @property string $quiz
 * @property string $type
*/
class QuizQuestion extends Model
{
    use SoftDeletes;

    protected $fillable = ['image', 'quiz_id', 'type_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        QuizQuestion::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setQuizIdAttribute($input)
    {
        $this->attributes['quiz_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTypeIdAttribute($input)
    {
        $this->attributes['type_id'] = $input ? $input : null;
    }
    
    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id')->withTrashed();
    }
    
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id')->withTrashed();
    }
    
}

<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Quiz
 *
 * @package App
 * @property string $slug
 * @property string $auth
 * @property string $category
*/
class Quiz extends Model
{
    use SoftDeletes;

    protected $fillable = ['slug', 'auth_id', 'category_id'];
    protected $hidden = [];


    public static function boot()
    {
        parent::boot();
        Quiz::observe(new \App\Observers\UserActionsObserver);
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
    public function setCategoryIdAttribute($input)
    {
        $this->attributes['category_id'] = $input ? $input : null;
    }

    public function auth()
    {
        return $this->belongsTo(User::class, 'auth_id');
    }

    public function category()
    {
        return $this->belongsTo(QuizCategory::class, 'category_id')->withTrashed();
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

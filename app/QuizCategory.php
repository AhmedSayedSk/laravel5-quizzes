<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class QuizCategory
 *
 * @package App
 * @property string $icon
*/
class QuizCategory extends Model
{
    use SoftDeletes;

    protected $fillable = ['icon'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        QuizCategory::observe(new \App\Observers\UserActionsObserver);
    }
    
}

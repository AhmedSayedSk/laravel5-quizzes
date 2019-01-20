<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Module
 *
 * @package App
 * @property string $title
 * @property string $parent
*/
class Module extends Model
{
    use SoftDeletes;

    public $timestamps = false;
    protected $fillable = ['title', 'parent_id'];
    protected $hidden = [];


    public static function boot()
    {
        parent::boot();
        Module::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setParentIdAttribute($input)
    {
        $this->attributes['parent_id'] = $input ? $input : null;
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id')->withTrashed();
    }
}

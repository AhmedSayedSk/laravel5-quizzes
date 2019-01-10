<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Type
 *
 * @package App
 * @property string $title
 * @property string $module
*/
class Type extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'module_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Type::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setModuleIdAttribute($input)
    {
        $this->attributes['module_id'] = $input ? $input : null;
    }
    
    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id')->withTrashed();
    }
    
}

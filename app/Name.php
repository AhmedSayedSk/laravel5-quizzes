<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Name
 *
 * @package App
 * @property string $title
 * @property text $description
 * @property string $module
 * @property integer $reference_id
 * @property string $language
*/
class Name extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'reference_id', 'module_id', 'language_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Name::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setModuleIdAttribute($input)
    {
        $this->attributes['module_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setReferenceIdAttribute($input)
    {
        $this->attributes['reference_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setLanguageIdAttribute($input)
    {
        $this->attributes['language_id'] = $input ? $input : null;
    }
    
    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id')->withTrashed();
    }
    
    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id')->withTrashed();
    }
    
}

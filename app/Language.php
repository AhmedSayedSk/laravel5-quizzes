<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Language
 *
 * @package App
 * @property string $title
 * @property string $symbol
 * @property string $image
*/
class Language extends Model
{
    use SoftDeletes;

    public $timestamps = false;
    protected $fillable = ['title', 'symbol', 'image'];
    protected $hidden = [];

    public static function boot()
    {
        parent::boot();
        Language::observe(new \App\Observers\UserActionsObserver);
    }

		public function getNamesAttribute()
    {
    		return get_module_names(get_module_id('system.languages'), $this->id);
    }

}

<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function type()
    {
        return $this->belongsTo("App\Models\System\Type");
    }

    public function scopeOfType($query, $type)
    {
    	$type = \App\Models\System\Type::where([
    		'module_id' => get_module_id('users'),
    		'title' => $type
    	])->first();

    	if($type)
        	return $query->where('type_id', $type->id);
    }
}

<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	public $timestamps = false;

	public function getNamesAttribute()
    {
    	return get_module_names(get_module_id('languages'), $this->id);
    }
}

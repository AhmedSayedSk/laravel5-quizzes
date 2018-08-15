<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	public $timestamps = false;

	public function module()
    {
        return $this->belongsTo("App\Models\System\Module");
    }
}

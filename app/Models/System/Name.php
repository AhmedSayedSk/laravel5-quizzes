<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
	public $timestamps = false;

	public function module()
    {
        return $this->belongsTo("App\Models\System\Module");
    }

    public function language()
    {
        return $this->belongsTo("App\Models\System\Language");
    }
}

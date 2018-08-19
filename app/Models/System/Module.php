<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	public $timestamps = false;

	public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}

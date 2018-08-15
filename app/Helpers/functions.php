<?php

function get_module_id($module_name)
{
	if($module = \App\Models\System\Module::where('title', $module_name)->first())
		return $module->id;
}

function get_module_names($module_id, $reference_id)
{
	return \App\Models\System\Name::where([
		'module_id' => $module_id,
		'reference_id' => $reference_id
	])->with('language')->get();
}
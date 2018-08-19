<?php

	/**
   	 *
   	 *
   	 *  @param  string $module_name
   	 *  @return integer $module_id
   	 */
	function get_module_id(string $module_name)
	{
		if($module = \App\Models\System\Module::where('title', $module_name)->first())
			return $module->id;
	}

	/**
   	 *
   	 *
   	 *  @param  int $module_id, int $reference_id
   	 *  @return array $names
   	 */
	function get_module_names(int $module_id, int $reference_id)
	{
		return \App\Models\System\Name::where([
			'module_id' => $module_id,
			'reference_id' => $reference_id
		])->with('language')->get();
	}
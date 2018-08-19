<?php

	/**
   	 *
   	 *
   	 *  @param  string $module_name
   	 *  @return integer $module_id
   	 */
	function get_module_id(string $module_name)
	{
		$parent_id = null;
		$title = $module_name;
		$module_name_exploded = explode('.', $module_name);
		$sub_module_count = count($module_name_exploded);

		if($sub_module_count > 1) {
			$top_module = $module_name_exploded[$sub_module_count - 2];
			$new_module_name = pathinfo($module_name, PATHINFO_FILENAME);
			$parent_id = get_module_id($new_module_name);
			$title = $module_name_exploded[$sub_module_count - 1];
		}

		$module = \App\Models\System\Module::where([
			'parent_id' => $parent_id,
			'title' => $title
		])->first();

		if($module)
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
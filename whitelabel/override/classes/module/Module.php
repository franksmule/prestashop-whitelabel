<?php

abstract class Module extends ModuleCore
{
	public static function getModulesOnDisk($useConfig = false, $loggedOnAddons = false, $id_employee = false)
	{
		// Remove all priced modules.
		$module_list = parent::getModulesOnDisk($useConfig, $loggedOnAddons, $id_employee);
		foreach ($module_list as $key => $module) {
			if ($module->type == 'addonsMustHave') {
				unset($module_list[$key]);
			}
		}
		return $module_list;
	}
}
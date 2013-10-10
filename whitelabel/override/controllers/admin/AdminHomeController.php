<?php
class AdminHomeController extends AdminHomeControllerCore
{
	public function ajaxProcessGetAdminHomeElement()
	{
		// Don't display featured partner modules, tip of the day etc - on dashboard front page.
		$this->content_only = true;
	}
}
?>
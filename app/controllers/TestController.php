<?php

class TestController extends ApplicationController
{
	public function indexAction()
	{
		// echo "loqtuquieabb";
		// exit (0);
		$this->view->message;
		// var_dump $this->view->message();
	}
	
	public function checkAction()
	{
		var_dump(WEB_ROOT);
	}
}

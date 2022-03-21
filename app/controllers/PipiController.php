<?php


class PipiController extends ApplicationController
{
	public function indexAction()
	{
		// echo "loqtuquieabb desde el archivo caca";
		// exit (0);
		$this->view->message = "hello from test::index";
	}
	
	public function checkAction()
	{
		echo "hello from test::check";
	}
}

?>
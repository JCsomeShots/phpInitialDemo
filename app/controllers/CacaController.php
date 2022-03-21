<?php


class CacaController extends ApplicationController
{
	public function indexAction()
	{
		echo "loqtuquieabb desde el archivo caca";
		exit (0);
		$this->view->message = "y por aquí puedo acceder??";
	}
	
	public function checkAction()
	{
		echo "hello from test::check";
	}
}

?>
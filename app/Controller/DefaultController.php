<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\PageManager;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil
	 */
	public function home()
	{
		$this->show('default/home');
	}

}
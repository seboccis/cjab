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

	/**
	 * Page d'événements
	 */
	public function activites()
	{
		$this->show('default/activites');
	}

	/**
	 * Page de plan
	 */
	public function map()
	{
		$this->show('default/map');
	}

	/**
	 * Page sur l'histoire
	 */
	public function history()
	{
		$this->show('default/history');
	}

	/**
	 * Page sur l'équipe
	 */
	public function team()
	{
		$this->show('default/team');
	}

	/**
	 * Page de contact
	 */
	public function contact()
	{
		$this->show('default/contact');
	}

}
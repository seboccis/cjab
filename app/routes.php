<?php
	
	$w_routes = array(
		// Page d'accueil
		['GET', '/', 'Default#home', 'home'],
		// Page d'événements
		['GET', '/activites/', 'Default#activites', 'activites'],
		// Page sur l'histoire
		['GET', '/histoire/', 'Default#history', 'history'],
		// Page sur l'équipe
		['GET', '/equipe/', 'Default#team', 'team'],
		// Page de contact
		['GET', '/contact/', 'Default#contact', 'contact'],
	);
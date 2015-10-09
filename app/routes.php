<?php
	
	$w_routes = array(
		// Page d'accueil
		['GET|POST', '/', 'Default#home', 'home'],
		// Page sur l'histoire
		['GET|POST', '/histoire/', 'Default#history', 'history'],
		// Page sur l'équipe
		['GET|POST', '/equipe/', 'Default#team', 'team'],
		// Page de contact
		['GET|POST', '/contact/', 'Default#contact', 'contact'],
		// Page d'événements
		['GET|POST', '/articles/', 'Article#articles', 'articles'],
	);
<?php
	
	$w_routes = array(
		// Page d'accueil
		['GET', '/', 'Default#home', 'home'],
		// Page d'événements
		['GET', '/activites/', 'Default#activites', 'activites'],
		// Page de plan de nos activités
		['GET', '/plan/', 'Default#map', 'map'],
		// Requête AJAX pour aller chercher les coordonnées pertinentes
		['GET', '/plan/ajaxGetMap/', 'GoogleMapAPI#ajaxGetMap', 'ajax_googleMapAPI_getMap'],
		// Page sur l'histoire
		['GET', '/histoire/', 'Default#history', 'history'],
		// Page sur l'équipe
		['GET', '/equipe/', 'Default#team', 'team'],
		// Page de contact
		['GET', '/contact/', 'Default#contact', 'contact'],
	);
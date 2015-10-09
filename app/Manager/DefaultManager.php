<?php

namespace Manager;

use \W\Manager\Manager;

class DefaultManager extends Manager
{

	/**
	 * Récupère une ligne active de la table en fonction d'un identifiant
	 * @param  integer Identifiant
	 * @return mixed Les données
	 */
	public function findActiv($id)
	{
		if (!is_numeric($id)){
			return false;
		}

		$sql = "SELECT * FROM " . $this->table . "
				WHERE id = :id
				AND status != 0 LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetch();
	}

	/**
	 * Récupère toutes les lignes actives de la table
	 * @param   $orderBy La colonne en fonction de laquelle trier
	 * @param   $orderDir La direction du tri, ASC ou DESC
	 * @return array Toutes les données de la table
	 */
	public function findActivAll($orderBy = "", $orderDir = "ASC")
	{

		$sql = "SELECT * FROM " . $this->table;
		if (!empty($orderBy)){

			//sécurisation des paramètres, pour éviter les injections SQL
			if(!preg_match("#^[a-zA-Z0-9_$]+$#", $orderBy)){
				die("invalid orderBy param");
			}
			$orderDir = strtoupper($orderDir);
			if($orderDir != "ASC" && $orderDir != "DESC"){
				die("invalid orderDir param");
			}

			$sql .= " WHERE status != 0
					  ORDER BY $orderBy $orderDir";

		}

		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}

	/**
	 * Récupère toutes les lignes actives de la table
	 * @param   $orderBy La colonne en fonction de laquelle trier
	 * @param   $orderDir La direction du tri, ASC ou DESC
	 * @return array Toutes les données de la table
	 */
	// public function findActivByIds($arrayIds)
	// {
	// 	if (!is_numeric($id)){
	// 		return false;
	// 	}

	// 	$sql = "SELECT * FROM " . $this->table . "
	// 			WHERE id = :id
	// 			AND status != 0 LIMIT 1";
	// 	$sth = $this->dbh->prepare($sql);
	// 	$sth->bindValue(":id", $id);
	// 	$sth->execute();

	// 	return $sth->fetch();
	// }

}
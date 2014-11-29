<?php
namespace DAL;
use \PDO;

class DBSelect
{
	private $resultSet;
	private $db;
	
	public function __construct($queryStmt = false)
	{
		$obj = new DBConnect();
		$this->db = $obj->DBObj;
		
		if($queryStmt) 
			$this->executeQuery($queryStmt);
	}
	
	public function getRS()
	{
		return $this->resultSet;
	}
	
	public function executeQuery($queryStmt)
	{
		$stmt = $this->db->query($queryStmt);
		$this->resultSet = $stmt->fetchAll();
	}
	
	public function executeQuerySingleValue($queryStmt)
	{
		$stmt = $this->db->query($queryStmt);
		return $stmt->fetchColumn();
	}
	
	public function executeQuerySingleRow($queryStmt)
	{
		$stmt = $this->db->query($queryStmt);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	public function getLanguage($langID)
	{
		return $this->executeQuerySingleValue('SELECT name FROM language WHERE language_id='.$langID);
	}
	
	public function getActorsByFilm($filmid)
	{
		$this->executeQuery('SELECT first_name,last_name FROM actor A where A.actor_id IN (select actor_id from film_actor where film_id='.$filmid.')');
		return $this->getRS();
	}
		
}


?>
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
		$this->resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}


?>
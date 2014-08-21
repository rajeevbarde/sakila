<?php
class DBConnect
{
	private $host;
	private $dbname;
	private $charset;
	private $username;
	private $password;
	public $DBObj;
	
	public function __construct($_host='localhost',$_dbname='sakila',$_username='root',$_password='')
	{
		echo "<b>inside DBConnect constructor</b>";
		
		$this->host = $_host;
		$this->dbname = $_dbname;
		$this->username = $_username;
		$this->password = $_password;
		$this->PDO_connect();
	}
	
	public function PDO_connect()
	{
		$this->DBObj = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8',$this->username,$this->password);
	}
	
	public function __destruct()
	{
			unset($this->DBObj);
			echo "<b>inside DBConnect destructor</b>";
	}
}//setting

?>
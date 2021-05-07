<?php
class DbConnection {
	private $host = "localhost";
	private $dbname = "carsales";
	private $username = "root";
	private $password = "";
	public $connection;
	public function __construct() {
		try {
			$this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
		} catch(PDOException $ex) {
			echo $ex->getMessage();
		}
	}
}
?>
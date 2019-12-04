<?php
namespace App\core;
ob_start();
session_start();

use PDO;

class Database{
	

	private $host   = 'localhost';
	private $dbname = 'practiceExam';
	private $user   = 'root';
	private $pass   = '';
	public $conn ;


	public function __construct(){

		try{
		$db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
		$this->conn = $db;
		}
		catch(PDOException $e){
			die('cant connect');
		}
	}




}


// $db = new Database();
// $res = $db->conn->query('Select * from user');


// var_dump($res->fetchAll(PDO::FETCH_ASSOC));

?>
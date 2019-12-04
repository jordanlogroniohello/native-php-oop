<?php
namespace App\core;
require_once 'database.php';

use App\core\Database;
use PDO;

class Model{

	public $table_name;
	public $primary;
	public $fields = [];
			
	public $conn;

	public function __construct(){
		$db = new Database();
		$this->conn = $db->conn;
	}

	public function findOne($field){

		if(is_array($field)) {

			array_walk($field,function(&$v,$k){
				$v = $k .' = "'. $v .'"';
			});

			$where = implode(" AND ", $field);
		}

		$query  = 'Select * from ' . $this->table_name .' where '.$where.' LIMIT 1';
		$result = $this->conn->query($query);

		//var_dump($query);

		return $result->fetch(PDO::FETCH_ASSOC);
	}


	public function populate($data){
		foreach ($data as $key => $value) {
			$this[$key] = $value;
		}
	}


}



?>
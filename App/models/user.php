<?php
namespace App\models;

require_once '../core/model.php';

use App\core\Model;

class User extends Model{

	public $table_name = "User";
	public $primary    = "id";
	public $fields     = ['id','username','password'];


	public $id;
	public $username;
	public $password;

	public function __construct(){
		parent::__construct();
	}


}




?>
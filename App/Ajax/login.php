<?php
require_once '../models/user.php';
use App\models\User;


if(isset($_POST['login'])){

	$user = (new User)->findOne(['email' => $_POST['email'] ] );
	//$user['password'];

	var_dump($_POST);
	var_dump($user);

	var_dump(password_verify($_POST['password'],$user['password']));
}




?>
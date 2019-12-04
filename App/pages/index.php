<?php
//require_once __DIR__ . '/../vendor/autoload.php';
require_once '../models/user.php';

use App\models\User;

$a = new User();
var_dump($a->table_name);
$hash = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

var_dump(password_verify("rasmuslerdorf",$hash));

var_dump($hash); 
echo "<br>";
var_dump(password_hash("ASDASD", PASSWORD_DEFAULT));
?>)
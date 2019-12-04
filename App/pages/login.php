<?php
require_once '../Ajax/login.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login.php" method="POST">
		<input type="text" name="email">
		<input type="password" name="password">
		<input type="submit" name="login">
	</form>
</body>
</html>
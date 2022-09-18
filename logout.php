<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: login.php");
die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

	<title>Document</title>
</head>
<body>
	
</body>
</html>
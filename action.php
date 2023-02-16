<?php
	session_start();

	if (!isset($_SESSION['email']))
	{
		header('location:index.html');
	}
	else{
?>

<?php


echo "<h1> your info </h1>";

$email = $_SESSION['email'];
$password = $_SESSION['password'];

$db_username = "oussama";
$db_password = $db_username;
$servername = "localhost";
$database = "form";

$con = new mysqli($servername, $db_username, $db_password, $database);


if (!$con->connect_error)
{
	$sql = "select * from form where email='$email' and password=md5('$password')";			
	$res = $con->query($sql);
	if ($res->num_rows > 0)
	{
		$row = $res->fetch_assoc();
		echo "Welcome " . $row['fname'] . "  " . $row['lname'] . "<br>";
	}
	else
		echo "invalid compt";	
}

else {
	echo "connection failed";
}




	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<a href="deconnexion.php">deconnexion</a>
	</body>
</html>


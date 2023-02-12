<?php


echo "<h1> your info </h1>";

$email = $_POST['email'];
$password = $_POST['password'];

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
		echo "Welcome " . $row['fname'] . "  " . $row['lname'];
	}
	else
		echo "invalid compt";	
}

else {
	echo "connection failed";
}





?>


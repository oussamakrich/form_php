<?php

$servername = "localhost";
$username = "root";

echo "<h1> your info </h1>";

$username = "oussama";
$password = $username;
$servername = "localhost";
$database = "form";

$con = new mysqli($servername, $username, $password, $database);

if (!$con->connect_error)
{

}

else {
	echo "connection failed";
}
?>


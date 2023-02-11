<?php


echo "<h1> your info </h1>";
// $tmp = $_POST['email'];	
$tmp = $_REQUEST['email'];
echo  "your email : $tmp","<br>";
echo  "your password :" , $_POST["password"], "<br>";

$username = "oussama";
$password = $username;
$servername = "localhost";

$con = new mysqli($servername, $username, $password);

if (!$con->connect_error)
{

}

else {
	echo "connection failed";
}





?>



<?php

function check_pass($p1, $p2)
{
	if ($p1 != $p2)
	{
		echo "Bad password : retry again";
		return 0;	
	}
	else 
		return 1;
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$username = "oussama";
$password = "oussama";
$servername = "localhost";
$datab = "form";

$con = new mysqli($servername, $username, $password, $datab);

if ($con->connect_error)
{
	echo "conn failed"; 
}

if (check_pass($pass1, $pass2) == 1)
{
	$sql = "INSERT into form (fname, lname, email, password)
		VALUES ($fname, $lname, $email, md5($pass1)";
	if ($con->query($sql) === TRUE)
	{
		echo "query established";
	}
	else {

		echo "failed";
	}
}

	$con->close();
?>

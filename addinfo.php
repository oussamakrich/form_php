
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

function estab_conn()
{
	$username = "oussama";
	$password = "oussama";
	$servername = "localhost";
	$datab = "form";

	$con = new mysqli($servername, $username, $password, $datab);
	if ($con->connect_error)
	{
		echo "conn failed"; 
		return (0);
	}
	return ($con);

}

function	check_email($con, $email)
{
	$sql = "select email from form";
	$res =  $con->query($sql);
	if ($res->num_rows < 0)
		return (1);
	while ($row = $res->fetch_assoc())
	{
		if ($email === $row['email'])
		{
			echo "$email is already exist";
			return (1);
		}
	}
	return 0;
}

function to_register()
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];


	$con = estab_conn();

	if (check_pass($pass1, $pass2) == 1)
	{
		if (check_email($con, $email))
			exit (1);
		$sql = "INSERT into form (fname, lname, email, password)
			VALUES ('$fname', '$lname', '$email', md5('$pass1'))";
		if ($con->query($sql) === TRUE)
		{
			echo "query established";
		}
		else {

			echo "failed";
		}
	}
		$con->close();
}
?>

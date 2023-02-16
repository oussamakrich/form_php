<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sing up</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<h1>register</h1>
		<h2>fill-in your info here</h2>
		<form action="./sign_up.html" method="post">
			<div><input type="text" name="fname" placeholder="First name"></div>
			<div><input type="text" name="lname" placeholder="Last name"></div>
			<div><input type="text" name="email" placeholder="your email"></div>
			<div><input type="text" name="pass1" placeholder="Password"></div>
			<div><input type="text" name="pass2" placeholder="retype the Password"></div>
			<div> <input type="submit"	value="submit"> </div><br>
			<a href="index.html" >you have an account </a>
			<?php
				require "addinfo.php"
				to_regiter();	
			<?

	</form>	
	
	</body>
</html>

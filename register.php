<?php 
	session_start();
	if (isset($_SESSION['login'])) {
	
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<font color ="white"
	<title>LOGIN YUK MAMANK</title>
	<link rel="stylesheet" href="">
	<form action="actionlogin.php" method="post">
</head>
<body style="background:url(a.gif)">


	<div class="box">
		<h2>Login MANK</h2>
	<form>
		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> USERMANK</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>PASSMANK</label>
		</div>
		
		
		<input type="submit" name="submit" value="submit">
		<button> <a href="formregister.php">register</a></button>
	</font>
	</form>
	</div>
	
</body>
</html>
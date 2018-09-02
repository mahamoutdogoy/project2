<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
	<form action="" method="POST">
		<br><br><br>
		<input type="submit" name="signup" value="Sign-Up">
		<br><br>
		<input type="submit" name="login" value="Login">
		<br><br>
	</form>

</body>
</html>
<?php 
	
	if (isset($_POST['signup'])) {
		header("Location: Recregister.php");
	}

	if (isset($_POST['login'])) {
		header("Location: reclogin.php");
	}

 ?>
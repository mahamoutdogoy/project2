<!DOCTYPE html>
<html>
<head>
	<title>Advertiser login page</title>>
  	<center><h1>Advertiser Login Page</h1></center>
</head>
	<style>
	h1
	{
		color:#ffef63;
	}
		body
		{
			background-image:url("ad1.jpg");
    		background-repeat:no-repeat;
    		background-size:cover;
			margin-left:200px;
			margin-right:200px;
			margin-top:100px;
		}
		table
		{
			background-color:#BAC8DF;
			border-radius:20px;
			border:1px solid;
		}
		.table
		{
			background-color:#484646;
			border-radius:20px;
			font-color:white;
			border:1px solid;
			opacity:0.8;
		}
		form{
			text-align:justify;
			font-size:20px;
		}
		input
		{
  			border-radius: 17px;
 			border-radius: 17px;
 			border-radius: 17px;
 			border-radius: 17px;
    		border:solid 1px;
   			padding:10px;
		}
		.text
		{
			width:200px;
		}
		.button 
		{
    		background-color: white;
    		border:2px solid #484646;
    		width:200px;
    		color: black;
    		padding: none;
   			text-align: center;
    		text-decoration: none;
    		display: inline-block;
    		font-size: 16px;
		}
		.button:hover
		{
			background-color: #392F2F;
    		color: white;
		}
	</style>
	<body>
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
	<table>
	<table cellpadding="15" align="center" class="table">
	<form action="" method="POST">
	<tr>
		<td>Username:</td>
		<td><input type="text" class="text" name="username" id="username"></td>
	</tr>
	<tr>
		<td>Password:</td><br>
		<td><input type="password" class="text" name="password" id="password"></td>
	</tr>
	</table><br>
	<center><b><input type="submit" class="button" name="login" value="Sign In"></b></center><br>
		<center><input type="reset" class="button" name="reset" value="Clear"></center><br>
		
		</table>
	</body>
</html>
<?php
session_start();
?>

<?php
require('db.php');
	
	if (isset($_POST['login'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	
        $query = "SELECT * FROM `adregister` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
       
			header("Location: adprofile.php?q=$username");

            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/></div>";
				}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Advertiser login page</title>
  	<center><h1>Advertiser Login Page</h1></center>

</head>

	<style>
	*{
		font-family: 'Cabin', sans-serif;
	}
	h1
	{
		color:#ffef63;
	}
		body
		{
			background-image:url("adbg1.jpg");
    		background-repeat:no-repeat;
    		background-size:cover;
			margin-left:200px;
			margin-right:200px;
			margin-top:100px;
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
		input[type=text] {
    		background-color: white;
    		background-image: url('femaleicon.png');
    		background-position: 5px 5px;
    		padding-left: 40px;
    		background-size: 7%; 
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		width: 250px;
    		padding-top: 8px;
    		padding-bottom: 8px;
		}
		input[type=password] {
    		background-color: white;
    		background-image: url('passicon1.png');
   			background-position: 5px 5px; 
    		background-size: 7%;
    		padding-left: 40px;
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		padding-top: 8px;
    		padding-bottom: 8px;
    		width: 250px;
		}
		.button 
		{
    		border-radius: 15px;
			padding:5px 5px 5px 5px;
			width:100px;
			font-style: bold;
			font-family: 'Cabin', sans-serif;
		}
		.button_cancel 
		{
    		border-radius: 15px;
			padding:5px 5px 5px 5px;
			width:100px;
			font-style: bold;
			font-family: 'Cabin', sans-serif;
		}

		.button:hover
		{
			background-color: #85E86A;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.button_cancel:hover
		{
			background: linear-gradient(to bottom, #ff6666 0%, #ff6666 100%);
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.posting{
			background-color: #FAD87B;
    		border:1px solid #ccc;
    		padding-left: 20px;
    		padding-right: 20px;
    		padding-top: 20px;
    		margin-left: 300px;
    		margin-right: 320px;
    		border-radius: 10px;
    		background: linear-gradient(to bottom, #ffcc66 0%, #ff9966 100%);
    		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
	</style>
	<body>
		<div class="posting">
			<table>
				<form action="" method="POST">
				<tr>
					<td><input type="text" class="text" name="username" id="username" placeholder="Username"><br></td>
				</tr>
				<tr>
					<td><br><input type="password" class="text" name="password" id="password" placeholder="Password"></td>
				</tr>
				<tr>
					<td><br><center><input type="submit" class="button" name="login" value="Sign In">
	    			<input type="submit" class="button" name="signup" value="Sign-Up"></center>
					<center><br><input type="reset" class="button_cancel" name="reset" value="Clear" ></center></td>
				</tr>
				</form>
			</table>
		</div>
	</body>
</html>
<?php
session_start();
?>

<?php
require('db.php');
 if (isset($_POST['signup'])) {
		header("Location: adregister.php");
	}
	
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
				echo "<div class='form'><h3>Username/Password is Incorrect.</h3><br/></div>";
				}
	}
?>
<style type="text/css">
	.form{
    	border:1px solid #ccc;
    	margin-left:310px;
    	margin-right:310px;
    	margin-top:20px;
    	text-align: center;
    	border-radius: 10px;
    	background: linear-gradient(to bottom, #ff9933 0%, #ff0000 100%);
    	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
</style>
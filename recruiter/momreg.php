<!DOCTYPE html>
<html>
<head>
  	<center><h1>Single Mom's Registration</h1></center>
</head>
	<style>
		body
		{
				 background-image:url("yellow.jpg");
    		background-repeat:no-repeat,repeat;
    		background-size: cover;
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
		}

		input
		{
  			border-radius: 13px;
 			border-radius: 13px;
 			border-radius: 13px;
 			border-radius: 13px;
    		border:solid 1px;
   			padding:10px;
		}

		.text
		{
			width:300px;
		}

		.button 
		{
    		background-color: white;
    		border:2px solid #484646;
    		width:330px;
    		color: black;
    		padding: none;
   			text-align: center;
    		text-decoration: none;
    		display: inline-block;
    		font-size: 16px;
		}

		.list
		{
			width:340px;
		}

		.button:hover
		{
			background-color: #392F2F;
    		color: white;
		}
	</style>
	<body>
		<table cellpadding="20" align="center" class="table">
			<tr>
				<td>
				<form action="" method="POST">

					<input type="text" class="text" name="username" placeholder="Enter the Username" required><br>
					<br>
					<input type="text" class="text" name="fname" placeholder="First Name" required><br>
					<br>  
					<input type="text" class="text" name="lname" placeholder="Last Name" required><br>
					<br>					
					<input type="password" class="text" name="password" placeholder="Enter the password" required><br>
					<br>
					<input type="password" class="text" name="cpassword" placeholder="Confirm the password" required><br>
					<br>
					<input type="submit" class="button" name="register" value="Proceed"></b><br>
				</form>
			</td>
			</tr>
		</table>
		
	</body>
</html>

<?php
require('db.php');
   if (isset($_POST['register']))
   {
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$fname = stripslashes($_REQUEST['fname']); 
		$fname = mysqli_real_escape_string($con,$fname); 
		$lname = stripslashes($_REQUEST['lname']); 
		$lname = mysqli_real_escape_string($con,$lname); 
		$password = stripslashes($_REQUEST['password']); 
		$password = mysqli_real_escape_string($con,$password);
		$cpassword = stripslashes($_REQUEST['cpassword']); 
		$cpassword = mysqli_real_escape_string($con,$cpassword);  

		if($password!=$cpassword){
				echo "mismatch password";
		}
		else
		{
			$query = "INSERT INTO `momreg` (username,fname,lname,password) VALUES ('$username','$fname','$lname','$password')";
			$result = mysqli_query($con,$query);
   
  		 	if($result)	{ 
        	                header("Location: mompd.php?q=$username");           
        				}	
    	  	else	{
      						echo "Problem with result";
      				}	
		}
	
}

?>
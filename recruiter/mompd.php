<?php 
	$username = $_GET['q'];
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1><?php echo "Welcome Super Mom"; $username?></h1></center>
</head>
	<style>
		body
		{
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

					<input type="email" class="text" name="email" placeholder="Enter your mail id" required><br>
					<br>
					<input type="number" class="text" name="phone" placeholder="Enter your mobile number" required><br>
					<br>  
					<input type="text" class="text" name="city" placeholder="City currently living in" required><br>
					<br>					
					<input type="text" class="text" name="education" placeholder="Highest Education" required><br>
					<br>
					<input list="reason" name="reason" placeholder="Reason for single motherhood" class="list" required>
					<datalist id="reason">
						<option value="My partner passed away"></option>
						<option value="I'm a divorcee"></option>
						<option value="I adopted my kid"></option>
						<option value="Other"></option>
					</datalist><br>
					<br>
					<input type="submit" class="button" name="register" value="Register"></b><br>
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
		$email = stripslashes($_REQUEST['email']); 
		$email = mysqli_real_escape_string($con,$email);
		$phone = stripslashes($_REQUEST['phone']); 
		$phone = mysqli_real_escape_string($con,$phone); 
		$city = stripslashes($_REQUEST['city']); 
		$city = mysqli_real_escape_string($con,$city); 
		$education = stripslashes($_REQUEST['education']); 
		$education = mysqli_real_escape_string($con,$education);
		$reason = stripslashes($_REQUEST['reason']); 
		$reason = mysqli_real_escape_string($con,$reason);  

	
			$query = "INSERT INTO `mompd` (username,email,phone,city,education,reason) VALUES ('$username','$email','$phone','$city','$education','$reason')";
			$result = mysqli_query($con,$query);
   
  		 	if($result)	{ 
        	                header("Location: thanksmom.php");           
        				}	
    	  	else	{
      						echo "Problem with result";
      				}	
		
	
	}

?>
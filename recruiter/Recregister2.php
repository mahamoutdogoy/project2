<!DOCTYPE html>
<html>
<head>
  	<center><h1>Recruiter Registration</h1></center>
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

					<input type="text" class="text" name="username" placeholder="Enter the Username" required><br>
					<br>
					<input type="text" class="text" name="name" placeholder="Enter the Username" required><br>
					<br>  
					<input type="text" class="text" name="cname" placeholder="Enter the Company/Organization name" required><br>
					<br>					
					<input type="text" class="text" name="email" placeholder="Enter the mail-id" required><br>
					<br>					 
					<input list="btype" name="btype" placeholder="Business type" class="list" required>
					<datalist id="btype">
						<option value="Private"></option>
						<option value="Public"></option>
						<option value="Others"></option>
					</datalist>
					<br><br>
					<input type="text" class="text" name="password" placeholder="Enter the password" required><br>
					<br>
					<input type="text" class="text" name="cpassword" placeholder="Confirm the password" required><br>
					<br>
					<input type="number" class="text" name="mobile" placeholder="Enter the mobile number" required><br><br>
					<input type="text" class="text" name="location" placeholder="company/organization head location"required><br><br>
					<input list="csize" name="csize" placeholder="Number of employees working" class="list" required>
					<datalist id="csize">
						<option value="100-500"></option>
						<option value="500-1000"></option>
						<option value="more than 1000"></option>
					</datalist><br>
					<br>
					<input list="smom" name="smom" placeholder="How did you hear about us?" class="list" required>
					<datalist id="smom">
						<option value="Online Advertisement"></option>
						<option value="Friends"></option>
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
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$name = stripslashes($_REQUEST['name']); 
		$name = mysqli_real_escape_string($con,$name); 
		$cname = stripslashes($_REQUEST['cname']); 
		$cname = mysqli_real_escape_string($con,$cname); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$btype = stripslashes($_REQUEST['btype']);
		$btype = mysqli_real_escape_string($con,$btype);
		$password = stripslashes($_REQUEST['password']); 
		$password = mysqli_real_escape_string($con,$password);
		$cpassword = stripslashes($_REQUEST['cpassword']); 
		$cpassword = mysqli_real_escape_string($con,$cpassword);  
		$mobile = stripslashes($_REQUEST['mobile']);
		$mobile = mysqli_real_escape_string($con,$mobile);
		$location = stripslashes($_REQUEST['location']); 
		$location = mysqli_real_escape_string($con,$location);
		$csize = stripslashes($_REQUEST['csize']); 
		$csize = mysqli_real_escape_string($con,$csize);
		$smom = stripslashes($_REQUEST['smom']); 
		$smom = mysqli_real_escape_string($con,$smom); 

		if($password!=$cpassword){
				echo "mismatch password";
		}
		else
		{
			$query = "INSERT INTO `recregister2` (username,name,cname,email,btype,password,mobile,location,csize,smom) VALUES ('$username','$name','$cname','$email','$btype','$password','$mobile','$location','$csize','$smom')";
			$result = mysqli_query($con,$query);
   
  		 	if($result)	{ 
        	                header("Location: reclogin2.php");            
        				}	
    	  	else	{
      						echo "Problem with result";
      				}	
		}
	
}

?>
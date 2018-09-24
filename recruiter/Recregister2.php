<!DOCTYPE html>
<html>
<head>
  	<center><h1>Recruiter Registration</h1></center>
</head>
	<style>
		body
	*{
		font-family: 'Cabin', sans-serif;
	}
		body
		{
			background-image: url(recbg.jpg);
    		background-repeat:no-repeat,repeat;
    		background-size: cover;
			margin-left:200px;
			margin-right:200px;
			margin-top:100px;			
		}

		form{
			text-align:justify;	
		}

		.text
		{
			width:300px;
		}

		.list
		{
			width:340px;
		}

		.button 
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
		.posting{
			background-color: #FAD87B;
    		border:1px solid #ccc;
    		padding-left: 20px;
    		padding-right: 20px;
    		padding-top: 20px;
    		margin-left: 300px;
    		margin-right: 310px;
    		border-radius: 10px;
    		background: linear-gradient(to bottom, #ffcc66 0%, #ff9966 100%);
    		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		input[type=text]{
    		background-color: white;
    		background-position: 5px 5px;
    		padding-left: 40px;
    		background-size: 7%; 
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		width: 250px;
    		padding-top: 8px;
    		padding-bottom: 8px;
		}
		input[type=text].location {
    		background-color: white;
    		background-image: url('placeholder.png');
    		background-position: 5px 5px;
    		padding-left: 40px;
    		background-size: 7%; 
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		width: 250px;
    		padding-top: 8px;
    		padding-bottom: 8px;
		}
		input[type=text].name {
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
		input[type=tel] {
    		background-color: white;
    		background-image: url('smartphone.png');
   			background-position: 5px 5px; 
    		background-size: 7%;
    		padding-left: 40px;
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		padding-top: 8px;
    		padding-bottom: 8px;
    		width: 250px;
		}
		input[type=email] {
    		background-color: white;
    		background-image: url('at.png');
   			background-position: 5px 5px; 
    		background-size: 7%;
    		padding-left: 40px;
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		padding-top: 8px;
    		padding-bottom: 8px;
    		width: 250px;
		}
		input[list="btype"] {
    		background-color: white;
    		background-image: url('typing.png');
   			background-position: 5px 5px; 
    		background-size: 7%;
    		padding-left: 40px;
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		padding-top: 8px;
    		padding-bottom: 8px;
    		width: 250px;
		}
		input[list="smom"] {
    		background-color: white;
    		background-image: url('typing.png');
   			background-position: 5px 5px; 
    		background-size: 7%;
    		padding-left: 40px;
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		padding-top: 8px;
    		padding-bottom: 8px;
    		width: 250px;
		}
		input[list="csize"] {
    		background-color: white;
    		background-image: url('typing.png');
   			background-position: 5px 5px; 
    		background-size: 7%;
    		padding-left: 40px;
    		background-repeat: no-repeat;
    		border-radius: 20px;
    		padding-top: 8px;
    		padding-bottom: 8px;
    		width: 250px;
		}
		h1
		{
			color:#ffef63;
		}
	</style>
	<body>
			<div class="posting">
		<table>
			<tr>
				<td>
				<form action="" method="POST">

					<input type="text" class="name" name="username" placeholder="Enter the Username" required><br>
					<br>
					<input type="text" class="username" name="name" placeholder="Enter the Username" required><br>
					<br>  
					<input type="text" class="comp" name="cname" placeholder="Enter the Company/Organization name" required><br>
					<br>					
					<input type="email" class="email" name="email" placeholder="Enter the mail-id" required><br>
					<br>					 
					<input list="btype" name="btype" placeholder="Business type" class="list" required>
					<datalist id="btype">
						<option value="Private"></option>
						<option value="Public"></option>
						<option value="Others"></option>
					</datalist>
					<br><br>
					<input type="password" class="text" name="password" placeholder="Enter the password" required><br>
					<br>
					<input type="password" class="text" name="cpassword" placeholder="Confirm the password" required><br>
					<br>
					<input type="tel" class="text" name="mobile" placeholder="Enter the mobile number" required><br><br>
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
					<font style="font-family: 'Cabin', sans-serif;"><b><center>Already a Member? <a href="reclogin2.php">Sign  In</a></center></b></font>
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
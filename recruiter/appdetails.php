<?php
	$jid  = $_GET['q']; 
	$usern = $_GET['p'];
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>APPLICATION DETAILS</h1></center>
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

		.button:hover
		{
			background-color: #392F2F;
    		color: white;
		}

		.radio
		{
			width:100px;
		}
	</style>
	<body>
		<table cellpadding="20" align="center" class="table">
			<tr>
				<td>
				<!-- <center><img src="images/Capture.PNG" ></center><br> -->

				<form action="" method="POST">	Do you want to provide any contact mail-id: <br>
					<input type="email" class="text" name="jmail" placeholder="Contact mail id (optional)"><br><br>
				Do you want your applicants to submit resume: <br>
				<input type="radio" name="resume" value="YES" class="radio">YES&nbsp;
				<input type="radio" name="resume" value="NO" class="radio">NO<br><br>
				Education Qualification:<br>
				<input type="text" name="education"><br>
				Experience:<br>
				<input type="text" name="experience"><br>
				Proficiency Requirements:<br>
				<input type="text" name="language"><br><br>
				<input type="date" class="text" name="jduedate" placeholder="Due Date for apply"required><br><br>
				<input type="submit" class="button" name="next" value="Next"></b><br>
				</form>
			</td>
			</tr>
		</table>
		
	</body>
</html>

<?php
require('db.php');
   if (isset($_POST['next']))
   { 
		$jmail = stripslashes($_REQUEST['jmail']);
		$jmail = mysqli_real_escape_string($con,$jmail);
		$resume = stripslashes($_REQUEST['resume']);
		$resume = mysqli_real_escape_string($con,$resume);
		$education = stripslashes($_REQUEST['education']);
		$education = mysqli_real_escape_string($con,$education);
		$experience = stripslashes($_REQUEST['experience']); 
		$experience = mysqli_real_escape_string($con,$experience);  
		$language = stripslashes($_REQUEST['language']);
		$language = mysqli_real_escape_string($con,$language);
		$jduedate = stripslashes($_REQUEST['jduedate']);
		$jduedate = mysqli_real_escape_string($con,$jduedate);

	$query = "INSERT INTO `appdetails` (jid,jmail,resume,education,experience,language,jduedate) VALUES ('$jid','$jmail','$resume','$education','$experience','$language','$jduedate')";
	$result = mysqli_query($con,$query);
   if($result){ 
                            header("Location: recprofile2.php?q=$usern");
                            
        	}	
      else{
      	echo "Problem with result";
      }
}

?>
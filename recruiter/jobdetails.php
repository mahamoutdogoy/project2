<?php
	$jid  = $_GET['q'];
	$usern = $_GET['p'];  
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>JOB DETAILS</h1></center>
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
	</style>
	<body>
		<table cellpadding="20" align="center" class="table">
			<tr>
				<td>
				<!-- <center><img src="images/Capture.PNG" ></center><br> -->
				<form action="" method="POST">				
					<input list="jtype" name="jtype" placeholder="Job type" class="list" required>
					<datalist id="jtype">
						<option value="Full-Time"></option>
						<option value="Part-Time"></option>
						<option value="Work from home"></option>
						<option value="Internship"></option>
						<option value="Temporary"></option>
						<option value="Volunteer"></option>
						<option value="Commission based"></option>
						<option value="Contract"></option>
					</datalist><br>
					<br>
					<input list="jfield" name="jfield" placeholder="Job field" class="list" required>
					<datalist id="jfield">
						<option value="Freelancing"></option>
						<option value="computer and Technology"></option>
						<option value="Sales"></option>
						<option value="Infant care taking"></option>
						<option value="Teacher"></option>
						<option value="Healthcare professional"></option>
						<option value="Marketing"></option>
						<option value="Management"></option>
						<option value="Other"></option>
					</datalist><br>
					<br>
					<input type="text" class="text" name="jsalary" placeholder="Salary"required> &nbsp; 
					<input list="jsalarytype" name="jsalarytype" placeholder="Payment type" class="list" required>
					<datalist id="jsalarytype">
						<option value="Hourly"></option>
						<option value="Daily"></option>
						<option value="Monthly"></option>
						<option value="Annualy"></option>
						</datalist><br>
					<br>					 
					<input type="text" class="text" name="jdesc" placeholder="Please give 2 to 3 senstences of job description"required><br>
					<br>
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
		$jtype = stripslashes($_REQUEST['jtype']);
		$jtype = mysqli_real_escape_string($con,$jtype);
		$jfield = stripslashes($_REQUEST['jfield']);
		$jfield = mysqli_real_escape_string($con,$jfield);
		$jdesc = stripslashes($_REQUEST['jdesc']);
		$jdesc = mysqli_real_escape_string($con,$jdesc);
		$jsalary = stripslashes($_REQUEST['jsalary']); 
		$jsalary = mysqli_real_escape_string($con,$jsalary);  
		$jsalarytype = stripslashes($_REQUEST['jsalarytype']);
		$jsalarytype = mysqli_real_escape_string($con,$jsalarytype);
		$jdesc = stripslashes($_REQUEST['jdesc']); 
		$jdesc = mysqli_real_escape_string($con,$jdesc); 

	$query = "INSERT INTO `jobdetails` (jid,jtype,jfield,jsalary,jsalarytype,jdesc) VALUES ('$jid','$jtype','$jfield','$jsalary','$jsalarytype','$jdesc')";
	$result = mysqli_query($con,$query);
   if($result){ 
                            header("Location: appdetails.php?q=$jid&p=$usern");
                            
        	}	
      else{
      	echo "Problem with result";
      }
}

?>
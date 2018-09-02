<?php
	$usern  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>JOB POST</h1></center>
</head>
	<style>
		body
		{   background-image: url(yellow.jpg);
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

					<input type="text" class="text" name="jtitle" placeholder="Enter the job Title" required><br>
					<br>					
					<input list="jtype" name="jtype" placeholder="Job type" class="list" required>
					<datalist id="jtype">
						<option value="Full-Time"></option>
						<option value="Part-Time"></option>
						<option value="Work from home"></option>
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
					<input type="text" class="text" name="jdesc" placeholder="Please give 2 to 3 senstences of job description"required><br>
					<br>
					<input type="text" class="text" name="jquali" placeholder="Job qualification"required><br>
					<br>
					<input type="number" class="text" name="jsalary" placeholder="Salary per month"required><br><br>
					<input type="text" class="text" name="jlocation" placeholder="Job location"required><br><br>
					<input type="text" class="text" name="duedate" placeholder="Due Date for apply"required><br><br>
					<input type="submit" class="button" name="post" value="POST"></b><br>
				</form>
			</td>
			</tr>
		</table>
		
	</body>
</html>

<?php
require('db.php');
   if (isset($_POST['post']))
   {
		$jtitle = stripslashes($_REQUEST['jtitle']); 
		$jtitle = mysqli_real_escape_string($con,$jtitle); 
		$jtype = stripslashes($_REQUEST['jtype']);
		$jtype = mysqli_real_escape_string($con,$jtype);
		$jfield = stripslashes($_REQUEST['jfield']);
		$jfield = mysqli_real_escape_string($con,$jfield);
		$jdesc = stripslashes($_REQUEST['jdesc']);
		$jdesc = mysqli_real_escape_string($con,$jdesc);
		$jquali = stripslashes($_REQUEST['jquali']); 
		$jquali = mysqli_real_escape_string($con,$jquali);  
		$jsalary = stripslashes($_REQUEST['jsalary']);
		$jsalary = mysqli_real_escape_string($con,$jsalary);
		$jlocation = stripslashes($_REQUEST['jlocation']); 
		$jlocation = mysqli_real_escape_string($con,$jlocation); 
		$duedate  = stripslashes($_REQUEST['duedate']); 
		$duedate= mysqli_real_escape_string($con,$duedate); 
	$query = "INSERT INTO `jobpost` (jtitle,jtype,jfield,jdesc,jquali,jsalary,jlocation,duedate,datepost,username) VALUES ('$jtitle','$jtype','$jfield','$jdesc','$jquali','$jsalary','$jlocation','$duedate',NOW(),'$usern')";
	$result = mysqli_query($con,$query);
   if($result){ 
                            header("Location: recprofile.php?q=$usern");
                            
        	}	
      else{
      	echo "Problem with result";
      }
}

?>
<?php
	$jid  = $_GET['q']; 
	$usern = $_GET['p'];
?>
<?php
ob_start();
	if (isset($_POST['update']))
   {
   	require('db.php');
   	
   	$jtitle = stripslashes($_REQUEST['jtitle']);
	$jtitle = mysqli_real_escape_string($con,$jtitle);
	$cname = stripslashes($_REQUEST['cname']);
	$cname = mysqli_real_escape_string($con,$cname);
	$location = stripslashes($_REQUEST['location']);
	$location = mysqli_real_escape_string($con,$location);
	$jtype = stripslashes($_REQUEST['jtype']);
	$jtype = mysqli_real_escape_string($con,$jtype);
	$jfield = stripslashes($_REQUEST['jfield']);
	$jfield = mysqli_real_escape_string($con,$jfield);
	$jsalary = stripslashes($_REQUEST['jsalary']);
	$jsalary = mysqli_real_escape_string($con,$jsalary);
	$jsalarytype = stripslashes($_REQUEST['jsalarytype']);
	$jsalarytype = mysqli_real_escape_string($con,$jsalarytype);
	$jdesc = stripslashes($_REQUEST['jdesc']);
	$jdesc = mysqli_real_escape_string($con,$jdesc);
	$jmail = stripslashes($_REQUEST['jmail']);
	$jmail = mysqli_real_escape_string($con,$jmail);
	// $resume = stripslashes($_REQUEST['resume']);
	// $resume = mysqli_real_escape_string($con,$resume);
	$education = stripslashes($_REQUEST['education']);
	$education = mysqli_real_escape_string($con,$education);
	$experience = stripslashes($_REQUEST['experience']);
	$experience = mysqli_real_escape_string($con,$experience);
	$language = stripslashes($_REQUEST['language']);
	$language = mysqli_real_escape_string($con,$language);
	$jduedate = stripslashes($_REQUEST['jduedate']);
	$jduedate = mysqli_real_escape_string($con,$jduedate);

	$query3 = "UPDATE gstartd SET jtitle='$jtitle',cname='$cname',location='$location',datepost=NOW() WHERE jid=$jid";
	$query1 = "UPDATE jobdetails SET jtype='$jtype',jfield='$jfield',jsalary='$jsalary',jsalarytype='$jsalarytype',jdesc='$jdesc' WHERE jid=$jid";
	$query2 = "UPDATE appdetails SET jmail='$jmail',education='$education',experience='$experience',language='$language',jduedate='$jduedate' WHERE jid=$jid";


	$result = $con->query($query3);
	$result1 = $con->query($query1);
	$result2 = $con->query($query2);


	if($result1 OR $result2 OR $result){ 
              header("Location:vjob.php?q=$usern");            
        	}	
   		
   }

   if (isset($_POST['back']))
   {
   		header("Location:recprofile2.php?q=$usern");
   	}


?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>Update My Jobs</h1></center>
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
			/*background-color:#484646;*/
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
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
	<div calss="container">
		<div class="row">
			<div class="col-md-12">	
				<form action="#" method="POST">
							<?php
								require('db.php');
								$query3 = "SELECT g.jtitle, g.cname, g.location, j.jtype, j.jfield, j.jsalary, j.jsalarytype, j.jdesc, a.jmail, a.resume, a.education, a.experience, a.language, a.jduedate from gstartd AS g INNER JOIN jobdetails AS j ON g.jid=$jid AND j.jid=$jid INNER JOIN appdetails AS a ON g.jid=$jid AND a.jid=$jid ";

            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             				?>
			             		<input type="text" class="text" name="jtitle" value="<?php echo $rows3['jtitle']?>" placeholder="Enter the job Title" required><br>
								<br>
								<input type="text" class="text" name="cname" value="<?php echo $rows3['cname']?>" placeholder="Enter the job Title" required><br>
								<br>
								<input type="text" class="text" name="location" value="<?php echo $rows3['location']?>" placeholder="Enter the job Title" required><br>
								<br>
								<input list="jtype" name="jtype" value="<?php echo $rows3['jtype']?>" placeholder="Job type" class="list" required>
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
								<input list="jfield" name="jfield" value="<?php echo $rows3['jfield']?>" placeholder="Job field" class="list" required>
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
								<input type="text" class="text" name="jsalary" value="<?php echo $rows3['jsalary']?>" placeholder="Enter the job Title" required><br>
								<br>

								<input list="jsalarytype" class="text" name="jsalarytype" value="<?php echo $rows3['jsalarytype']?>" placeholder="Payment type" class="list" required>
								<datalist id="jsalarytype">
									<option value="Hourly"></option>
									<option value="Daily"></option>
									<option value="Monthly"></option>
									<option value="Annualy"></option>
									</datalist>
								<br><br>
								
								<input type="text" class="text" name="jdesc" value="<?php echo $rows3['jdesc']?>" placeholder="Enter the job Title" required><br>
								<br>

								<input type="text" class="text" name="jmail" value="<?php echo $rows3['jmail']?>" placeholder="Enter the job Title" required><br>
								<br>

								<input type="text" class="text" name="education" value="<?php echo $rows3['education']?>" placeholder="Enter the job Title" required><br>
								<br>

								<input type="text" class="text" name="experience" value="<?php echo $rows3['experience']?>" placeholder="Enter the job Title" required><br>
								<br>

								<input type="text" class="text" name="language" value="<?php echo $rows3['language']?>" placeholder="Enter the job Title" required><br>
								<br>

								<input type="date" class="text" name="jduedate" value="<?php echo $rows3['jduedate']?>" placeholder="Enter the job Title" required><br>
								<br>

								<input type="submit" class="button" name="update" value="UPDATE"></b><br>
								<br>
								<input type="submit" class="button" name="back" value="BACK"></b><br>

              					<?php
              					}
          ?>
          </form>
			</div>
		</div>
	</div>
		
	</body>
</html>


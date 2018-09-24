<?php
	$jid  = $_GET['q']; 
	$usern = $_GET['p'];
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
								$query3 = "SELECT jid,jtitle,jtype,jfield,jdesc,jquali,jsalary,jlocation,duedate,datepost FROM jobpost WHERE jid=$jid ";
            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             				?>
			             		<input type="text" class="text" name="jtitle" value="<?php echo $rows3['jtitle']?>" placeholder="Enter the job Title" required><br>
								<br>					
								<input list="jtype" name="jtype" value="<?php echo $rows3['jtype']?>" placeholder="Job type" class="list" required>
								<datalist id="jtype">
								<option value="Full-Time"></option>
								<option value="Part-Time"></option>
								<option value="Work from home"></option>
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
								<input type="text" class="text" name="jdesc" value="<?php echo $rows3['jdesc']?>" placeholder="Job description"required><br>
								<br>
								<input type="text" class="text" name="jquali" value="<?php echo $rows3['jquali']?>" placeholder="Job qualification"required><br>
								<br>
								<input type="number" class="text" name="jsalary" value="<?php echo $rows3['jsalary']?>" placeholder="Salary"required><br><br>
								<input type="text" class="text" name="jlocation" value="<?php echo $rows3['jlocation']?>" placeholder="Job location"required><br><br>
								<input type="text" class="text" name="duedate" value="<?php echo $rows3['duedate']?>" placeholder="Due Date for apply"required><br><br>
								<br>

								<input type="submit" class="button" name="update" value="UPDATE"></b><br>
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

<?php
	if (isset($_POST['update']))
   {
   	require('db.php');
   	
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
	$duedate = stripslashes($_REQUEST['duedate']);
	$duedate = mysqli_real_escape_string($con,$duedate);
	
	$query3 = "UPDATE jobpost SET jtitle='$jtitle',jtype='$jtype',jfield='$jfield',jdesc='$jdesc',jquali='$jquali',jsalary='$jsalary',jlocation='$jlocation',duedate='$duedate',datepost=NOW() WHERE jid=$jid";

	$result = $con->query($query3);

	if($result){ 
              header("Location:viewjobs.php?q=$usern");            
        	}	
      else{
      	echo "Problem with result";
      }
   		
   }

   if (isset($_POST['back']))
   {
   		header("Location:recprofile.php?q=$usern");
   	}


?>
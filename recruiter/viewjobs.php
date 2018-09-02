<?php
	$usern  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>View My Jobs</h1></center>
</head>
	<style>
		body
		{   background-image:url(yellow.jpg);
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
		<form method ="POST">
			<input type="submit" class="button" name="ijobs" value="Inactive Jobs">
			<input type="submit" class="button" name="back" value="Back">
			
		</form>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive"><br>
					<table class="table table-striped">
						<thead>
							<th>Job Title</th>
							<th>Job Type</th>
							<th>Job Field</th>
							<th>Job Descreption</th>
							<th>Job Qualification</th>
							<th>Job Salary</th>
							<th>Job Location</th>
							<th>Last Date to Apply</th>
							<th>Date of Post</th>
							<th>ID of the job</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php
								require('db.php');
								$query3 = "SELECT jid,jtitle,jtype,jfield,jdesc,jquali,jsalary,jlocation,duedate,datepost FROM jobpost WHERE username='$usern' AND DATE(duedate) >= CURDATE()";
            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             					$jtitle = $rows3['jtitle'];  
              					$jtype = $rows3['jtype'];
              					$jfield = $rows3['jfield'];
              					$jdesc = $rows3['jdesc'];
              					$jquali = $rows3['jquali'];
              					$jsalary = $rows3['jsalary'];
              					$jlocation = $rows3['jlocation'];
              					$duedate = $rows3['duedate'];
              					$datepost = $rows3['datepost'];
              					$jid = $rows3['jid'];
              				?>
              					<tr>
             					<td><?php echo $jtitle; ?></td>
              					<td><?php echo $jtype; ?></td>
              					<td><?php echo $jfield; ?></td>
             					<td><?php echo $jdesc; ?></td>
              					<td><?php echo $jquali; ?></td>
              					<td><?php echo $jsalary; ?></td>
             					<td><?php echo $jlocation; ?></td>
              					<td><?php echo $duedate; ?></td>
              					<td><?php echo $datepost; ?></td>
              					<td><?php echo $jid; ?></td>
              					<td><a href='editjob.php?q=<?php echo urlencode($jid);?>&p=<?php echo urlencode($usern);?>'">Edit</a></td>
              					<td><a href='deletejobpost.php?q=<?php echo urlencode($jid);?>&p=<?php echo urlencode($usern);?>'">Delete</a></td>
             					</tr>
              					<?php
              					}
          ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>		
	</body>
</html>
<?php 
	if(isset($_POST['ijobs'])){
		header("Location: inactive.php?q=$usern");
	}

	if (isset($_POST['back'])) {
		header("Location: recprofile.php?q=$usern");
	}


 ?>
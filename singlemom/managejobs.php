<?php
	$usern  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>Track My Jobs</h1></center>

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
		<form method ="POST">
			
			<input type="submit" class="button" name="back" value="Back"><br><br>
			<a href="javascript:history.go(0)">Click to refresh the page</a>
			
		</form>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive"><br>
					<table class="table table-striped">
						<thead>
							<th>Job ID</th>
							<th>Job Title</th>
							<th>Status</th>
							<th>Date of apply</th>
						</thead>
						<tbody>
							<?php
								require('db.php');
								$query3 = "SELECT gstartd.jid, gstartd.jtitle, applied.status, applied.apply FROM applied INNER JOIN gstartd ON applied.jid=gstartd.jid WHERE applied.username='$usern' ORDER BY applied.apply DESC";
            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             					  
              					$jid = $rows3['jid'];
              					$jtitle = $rows3['jtitle'];
              					$status = $rows3['status'];
              					$apply = $rows3['apply'];
              				?>
              					<tr>
             					
              					<td><?php echo $jid; ?></td>
              					<td><?php echo $jtitle; ?></td>
              					<td><?php echo $status; ?></td>
              					<td><?php echo $apply; ?></td>
              					<!-- <td><a href='ejob.php?q=<?php echo urlencode($jid);?>'">Edit</a></td> -->
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
	

	if (isset($_POST['back'])) {
		header("Location: momprofile.php?q=$usern");
	}

 ?>
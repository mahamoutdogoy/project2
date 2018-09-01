<?php
	$username  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>View My Advertisements</h1></center>
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

			<input type="submit" class="button" name="back" value="Back">
			
		</form>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive"><br>
					<table class="table table-striped">
						<thead>
							<th>Advertisement Title</th>
						
							<th>Advertisement Field</th>
							<th>Advertisement Descreption</th>
							
							<th>Advertisement Location</th>
							<th>Last Date to Apply</th>
							<th>Date of Post</th>
							<th>ID of the Advertisement</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php
								require('db.php');
								$query3 = "SELECT aid,atitle,afield,adesc,alocation,duedate,datepost FROM adpost WHERE username='$username' AND DATE(duedate) < CURDATE()";
            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             					$atitle = $rows3['atitle'];  
              					
              					$afield = $rows3['afield'];
              					$adesc = $rows3['adesc'];
              					
              					$alocation = $rows3['alocation'];
              					$duedate = $rows3['duedate'];
              					$datepost = $rows3['datepost'];
              					$aid = $rows3['aid'];
              				?>
              					<tr>
             					<td><?php echo $atitle; ?></td>
              					
              					<td><?php echo $afield; ?></td>
             					<td><?php echo $adesc; ?></td>
              					
             					<td><?php echo $alocation; ?></td>
              					<td><?php echo $duedate; ?></td>
              					<td><?php echo $datepost; ?></td>
              					<td><?php echo $aid; ?></td>
              					<td><a href='editad.php?q=<?php echo urlencode($aid);?>&p=<?php echo urlencode($username);?>'">Active Again</a></td>
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
	header("Location: viewads.php?q=$username");
}



?>
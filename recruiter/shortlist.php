<?php
	$jid  = $_GET['q']; 
	
?>
<?php

	if (isset($_POST['shortlist']))
   {
   	require('db.php');
   	$username = $_POST['username'];
   	$query3 = "UPDATE applied SET status = 'shortlisted' WHERE username='$username' AND jid='$jid'";
		 $result3 = $con->query($query3);
		 if ($result3) {
		 	echo "shortlisted";
		 }
   	
   }
	


?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>Shortlist applicants for Job ID:<?php echo "$jid"?></h1></center>
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
				<table class="table table-striped">
						<thead>
							<th>Username</th>
							<th>Applicant's name</th>
							<th>Applicant's City</th>
							<th>Education</th>
							<th>Applicant's Mail Id</th>
							<th>Applicant's phone number</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php
								require('db.php');
								$query3 = "SELECT momreg.fname,mompd.email, mompd.phone,mompd.city, mompd.education, applied.jid, applied.username,momreg.username, mompd.username FROM applied INNER JOIN momreg ON applied.username=momreg.username INNER JOIN mompd ON applied.username=mompd.username WHERE applied.jid='$jid' AND applied.status='applied' ";
            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             					$username = $rows3['username'];
             					$fname = $rows3['fname'];  
              					$city = $rows3['city'];
              					$education = $rows3['education'];  
              					$email = $rows3['email'];
              					$phone = $rows3['phone'];  
              				?>
              					<tr>
              					<td><?php echo $username; ?></td>
             					<td><?php echo $fname; ?></td>
              					<td><?php echo $city; ?></td>
              					<td><?php echo $education; ?></td>
              					<td><?php echo $email; ?></td>
              					<td><?php echo $phone ?></td>
              					
              					<form method="POST">
              					<td><input type="submit" name="shortlist" value="Shortlist"  /></td>
              					<input type="hidden" name="username" value="<?php echo $rows3['username']; ?>"/>
              					</form>
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
		
	</body>
</html>


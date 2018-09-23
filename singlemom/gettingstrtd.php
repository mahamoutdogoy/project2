<?php
	$usern  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>Getting Started</h1></center>
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
				<form action="" method="POST">
				<?php
						require('db.php');
						$query3 = "SELECT * FROM recregister2 WHERE username='$usern'";
            			$result3 = $con->query($query3);


           				while($rows3 = mysqli_fetch_array($result3)){
             	?>
          
					<input type="text" class="text" name="jtitle" placeholder="Job title (Keep it Precise)" required><br>
					<br>
						
					<input type="text" class="text" name="cname" value="<?php echo $rows3['cname']?>" placeholder="Company Name" required><br>
					<br>
					
					<input type="text" class="text" name="location" placeholder="Enter the location" required><br>
					<br>				
					<input type="submit" class="button" name="next" value="NEXT"></b><br>
					
					<?php
              					}
          ?>
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
		$jtitle = stripslashes($_REQUEST['jtitle']); 
		$jtitle = mysqli_real_escape_string($con,$jtitle); 
		$cname = stripslashes($_REQUEST['cname']); 
		$cname = mysqli_real_escape_string($con,$cname); 
		$location = stripslashes($_REQUEST['location']); 
		$location = mysqli_real_escape_string($con,$location);

		$query = "INSERT INTO `gstartd` (jtitle,cname,location,jdatepost,username) VALUES ('$jtitle','$cname','$location',NOW(),'$usern')";
	$result = mysqli_query($con,$query);
	$id=mysqli_insert_id($con);
	echo "$id";
   if($result){ 	
                header("Location: jobdetails.php?q=$id&p=$usern");
                            
        	}	
      else{
      	echo "Problem with result";
      }
}

?>
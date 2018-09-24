<?php
	$usern  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>ABOUT YOU</h1></center>
</head>
	<style>
		body
		{	 background-image:url("yellow.jpg");
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
						
					<input type="text" class="text" name="cname" value="<?php echo $rows3['cname']?>" placeholder="Your Name" required><br>
					<br>
					
					<input type="number" class="text" name="mobile" value="<?php echo $rows3['mobile']?>" placeholder="Your Name" required><br>
					<br>
										
					<input list="csize" name="csize" placeholder="Number of employees working" class="list" required>
					<datalist id="csize">
						<option value="100-500"></option>
						<option value="500-1000"></option>
						<option value="more than 1000"></option>
					</datalist><br>
					<br>
					<input list="smom" name="smom" placeholder="How did you hear about us?" class="list" required>
					<datalist id="smom">
						<option value="Online Advertisement"></option>
						<option value="Friends"></option>
						<option value="Other"></option>
					</datalist><br>
					<br>
					
					<input type="submit" class="button" name="post" value="POST"></b><br>
					
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
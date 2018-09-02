<?php
	$username  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>ADVERTISEMENT POSTING</h1></center>
</head>
	<style>
		body
		{ 
			background-image: url(yellow.jpg);
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

					<input type="text" class="text" name="atitle" placeholder="Enter the Advertisement Title" required><br>
					<br>					
					
					<input list="afield" name="afield" placeholder="Advertisement field" class="list" required>
					<datalist id="afield">
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

					<input type="text" class="text" name="adesc" placeholder="Please give 2 to 3 senstences of Advertisement description"required><br>
					<br>

					
					<input type="text" class="text" name="alocation" placeholder="Advertiser location"required><br><br>
					
					<input type="Date" class="text" name="duedate" placeholder="Due Date for apply"required><br><br>

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
		$atitle = stripslashes($_REQUEST['atitle']); 
		$atitle = mysqli_real_escape_string($con,$atitle); 
		$afield = stripslashes($_REQUEST['afield']);
		$afield = mysqli_real_escape_string($con,$afield);
		$adesc = stripslashes($_REQUEST['adesc']);
		$adesc = mysqli_real_escape_string($con,$adesc);
		$alocation = stripslashes($_REQUEST['alocation']); 
		$alocation = mysqli_real_escape_string($con,$alocation); 
		$duedate  = stripslashes($_REQUEST['duedate']); 
		$duedate= mysqli_real_escape_string($con,$duedate); 
		// $datepost  = stripslashes($_REQUEST['datepost']); 
		// $datepost= mysqli_real_escape_string($con,$datepost);
		// $username = stripslashes($_REQUEST['username']); 
		// $username = mysqli_real_escape_string($con,$username); 
	$query = "INSERT INTO `adpost` (atitle,afield,adesc,alocation,duedate,datepost,username) VALUES ('$atitle','$afield','$adesc','$alocation','$duedate',NOW(),'$username')";
	$result = mysqli_query($con,$query);
   if($result){ 
                            header("Location: adprofile.php?q=$username");
                            
        	}	
      else{
      	echo "Problem with result";
      }
}

?>
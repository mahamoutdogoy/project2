<?php
	$aid  = $_GET['q']; 
	$username = $_GET['p'];
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>Update My Advertisement</h1></center>
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
								$query3 = "SELECT aid,atitle,afield,adesc,alocation,duedate,datepost FROM adpost WHERE aid=$aid ";
            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             				?>
			             		<input type="text" class="text" name="atitle" value="<?php echo $rows3['atitle']?>" placeholder="Enter the Advertisement Title" required><br>
								<br>					
								
								<br>
								<input list="afield" name="afield" value="<?php echo $rows3['afield']?>" placeholder="Advertisement field" class="list" required>
								<datalist id="afield">
								<option value="Family and Parenting"></option>
								<option value="Education"></option>
								<option value="Health And Fitness"></option>
								<option value="Infant care taking"></option>
								<option value="Food And Drink"></option>
								<option value="Home And Garden"></option>
								<option value="Marketing"></option>
								<option value="Management"></option>
								<option value="Other"></option>
								</datalist><br>
								<br>			
								<input type="text" class="text" name="adesc" value="<?php echo $rows3['adesc']?>" placeholder="Advertisement description"required><br>
								<br>
								
								
								<input type="text" class="text" name="alocation" value="<?php echo $rows3['alocation']?>" placeholder="Advertisement location"required><br><br>
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
   	
   	$atitle = stripslashes($_REQUEST['atitle']);
	$atitle = mysqli_real_escape_string($con,$atitle);
	//$atype = stripslashes($_REQUEST['atype']);
	//$atype = mysqli_real_escape_string($con,$atype);
	$afield = stripslashes($_REQUEST['afield']);
	$afield = mysqli_real_escape_string($con,$afield);
	$adesc = stripslashes($_REQUEST['adesc']);
	$adesc = mysqli_real_escape_string($con,$adesc);
	$alocation = stripslashes($_REQUEST['alocation']);
	$alocation = mysqli_real_escape_string($con,$alocation);
	$duedate = stripslashes($_REQUEST['duedate']);
	$duedate = mysqli_real_escape_string($con,$duedate);
	
	$query3 = "UPDATE adpost SET atitle='$atitle',afield='$afield',adesc='$adesc',alocation='$alocation',duedate='$duedate',datepost=NOW() WHERE aid=$aid";

	$result = $con->query($query3);

	if($result){ 
              header("Location:viewads.php?q=$username");            
        	}	
      else{
      	echo "Problem with result";
      }
   		
   }

   if (isset($_POST['back']))
   {
   		header("Location:adprofile.php?q=$username");
   	}


?>
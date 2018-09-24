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
		{
       background-image:url("yellow.jpg");
    
      background-size: cover;
        margin-left: 10%;
   }  
      
table
    {
      background-color:#BAC8DF;
      border-radius:20px;
      border:1px solid;
    }
    .table
    {
      background-color:white;
      border-radius:20px;
      font-color:white;
      
      opacity:0.8;
      text-align: center;
    }
    form{
      text-align:justify;
      font-size:20px;
    }
    input
    {
        border-radius: 17px;
      border-radius: 17px;
      border-radius: 17px;
      border-radius: 17px;
        border:solid 1px;
        padding:10px;
    }
    .text
    {
      width:200px;
    }
    .button 
    {
        background-color: white;
        border:2px solid #484646;
        width:200px;
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
    .submit
    {
      width: 95px;
    }
    .box
    {
      width: 295px;
    }
        .change
    {
      width: 130px;
    }
    h1
    {
        text-align: center;
    }
	</style>
	<body>
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
	<div calss="container">
		<form method ="POST">
			<input type="submit" class="button" name="ijobs" value="Inactive Jobs">
			<input type="submit" class="button" name="back" value="Back"><br><br>
			<a href="javascript:history.go(0)">Click to refresh the page</a>
			
		</form>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive"><br>
					<table class="table table-striped">
						<thead>
							<th>Job Title</th>
							<th>ID of the job</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php
								require('db.php');
								$query3 = "SELECT jid,jtitle FROM gstartd WHERE username='$usern' AND jid IN (SELECT jid FROM appdetails WHERE DATE(jduedate) >= CURDATE()) ";
            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             					$jtitle = $rows3['jtitle'];  
              					$jid = $rows3['jid'];
              				?>
              					<tr>
             					<td><?php echo $jtitle; ?></td>
              					<td><?php echo $jid; ?></td>
              					<!-- <td><a href='ejob.php?q=<?php echo urlencode($jid);?>'">Edit</a></td> -->
              					<td><input type="submit" value="Edit" onclick="window.location.href='ejob.php?q=<?php echo urlencode($jid);?>&p=<?php echo urlencode($usern);?>'" /></td>
              					<form method="POST">
              					<td><input type="submit" name="delete" value="Delete"  /></td>
              					<input type="hidden" name="id" value="<?php echo $rows3['jid']; ?>"/>
              					</form>
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
		header("Location: inactive2.php?q=$usern");
	}

	if (isset($_POST['back'])) {
		header("Location: recprofile2.php?q=$usern");
	}

	if (isset($_POST['delete'])) {
		 $id = $_POST['id'];

		 $query3 = "DELETE FROM gstartd WHERE jid='$id'";
		 $result3 = $con->query($query3);
		 if ($result3) {
		 	header("Refresh: 5; url=vjob.php?q=$usern");
		 }
  		
  }
 ?>
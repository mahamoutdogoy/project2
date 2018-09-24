<?php
	$username  = $_GET['q']; 
?>
<!DOCTYPE html>
<html>
<head>
  	<center><h1>We have exciting Advertisements for you</h1></center>
</head>
	<style>
		body
		{   background-image: url(yellow.jpg);
    		background-repeat:no-repeat,repeat;
    		background-size: cover;
			margin-left:200px;
			margin-right:200px;
			margin-top:100px;			
		}

		table
		{
			/*background-color:#484646;*/
			border-radius:20px;
			/*border:1px solid;*/
		}

		/*form{
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
		}*/
		.button {
		  font: bold 11px Arial;
		  text-decoration: none;
		  background-color: #EEEEEE;
		  color: #333333;
		  border-radius: 20px;
		  padding:10px;
		  width: auto;
		  border-top: 1px solid #CCCCCC;
		  border-right: 1px solid #333333;
		  border-bottom: 1px solid #333333;
		  border-left: 1px solid #CCCCCC;
		}
		.button:hover{
			background-color: #85E86A;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.button_edit {
		  font: bold 11px Arial;
		  text-decoration: none;
		  background-color: #EEEEEE;
		  color: #333333;
		  border-radius: 20px;
		  padding: 2px 6px 2px 6px;
		  border-top: 1px solid #CCCCCC;
		  border-right: 1px solid #333333;
		  border-bottom: 1px solid #333333;
		  border-left: 1px solid #CCCCCC;
		}
		.button_edit:hover{
			background: linear-gradient(to bottom, #ffff99 0%, #ff9933 100%);
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.button_delete {
		  font: bold 11px Arial;
		  text-decoration: none;
		  color: #333333;
		  border-radius: 20px;
		  padding: 2px 6px 2px 6px;
		  background-color: #EEEEEE;
		  border-top: 1px solid #CCCCCC;
		  border-right: 1px solid #333333;
		  border-bottom: 1px solid #333333;
		  border-left: 1px solid #CCCCCC;
		}
		.button_delete:hover{
		  background: linear-gradient(to bottom, #ff0066 0%, #ff0000 100%);
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		table.blueTable {
		  font-family: Arial, Helvetica, sans-serif;
		  /*border: 2px solid #1C6EA4;*/
		  background: linear-gradient(to bottom, #99ccff 0%, #ffcccc 100%);
		  width: auto;
		  padding: 0px;
		  margin:0px;
		  height: auto;
		  text-align: left;
		  border-collapse: collapse;
		}
		table.blueTable td, table.blueTable th {
		  border: 0px solid #AAAAAA;
		  padding: 6px 4px;
		}
		table.blueTable tbody td {
		  font-size: 15px;
		  color: #497505;
		}
		table.blueTable tr:nth-child(even) {
		  background: #D0E4F5;
		}
		table.blueTable thead {
		  background: #E32D2D;
		  border-bottom: 5px solid #100244;
		}
		table.blueTable thead th {
		  font-weight: bold;
		  color: #FFFFFF;
		  border-left: 0px solid #F50F0F;
		}
		table.blueTable thead th:first-child {
		  border-left: none;
		}
		.action{
			width: 120px;
		}
		.title{
			width: 200px;
		}
		.field{
			width: 100px;
		}
		.desc{
			width: 200px;
		}
		.loc
		{
			width: 100px;
		}
		.lastdate{
			width: 150px;
		}
		.postdate{
			width: 120px;
		}
		.adid{
			width:50px;
		}
	</style>

	<body>
	<div class="container">
		<form method ="POST">
			<input style="float: right;" type="submit" class="button" name="logout" value="Logout"><br><br>	
			<input style="float: right;" type="submit" class="button" name="back" value="Back">
		</form>
		<?php 
	
	if (isset($_POST['back'])) 
	{
		header("Location: momprofile.php?q=$username");
	}
 ?>
	</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive"><br>
					<table class="blueTable" cellpadding="2px">
						<thead>
							<th class="title"><!-- Advertisement --> Title</th>
							<th class="field"><!-- Advertisement --> Field</th>
							<th class="desc"><!-- Advertisement --> Descreption</th>
							<th class="loc"><!-- Advertisement --> Location</th>
							<th class="lastdate">Due Date</th>
							<th class="postdate">Date of Post</th>
							
						</thead>
						<tbody>
							<?php
								require('db.php');
								$query3 = "SELECT aid,atitle,afield,adesc,alocation,duedate,datepost FROM adpost WHERE DATE(duedate) >= CURDATE()";
            					$result3 = $con->query($query3);
           						while($rows3 = mysqli_fetch_array($result3)){
             					$atitle = $rows3['atitle'];  
              					//$atype = $rows3['atype'];
              					$afield = $rows3['afield'];
              					$adesc = $rows3['adesc'];
              					
              					$alocation = $rows3['alocation'];
              					$duedate = $rows3['duedate'];
              					$datepost = $rows3['datepost'];
              					
              				?>
              					<tr>
             					<td><?php echo $atitle; ?></td>
              					<!-- <td><?php echo $atype; ?></td> -->
              					<td><?php echo $afield; ?></td>
             					<td><?php echo $adesc; ?></td>
              					
             					<td><?php echo $alocation; ?></td>
              					<td><?php echo $duedate; ?></td>
              					<td><?php echo $datepost; ?></td>
              					
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

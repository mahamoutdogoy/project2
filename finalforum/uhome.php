<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>

<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

<style type="text/css">
	body{
		/*background-image: url('images/bgg.jpg');*/
		background-color:#FFAC3D;
	}
	.footer {
    padding: 10px;
    text-align: center;
    background: #ddd;	
    margin-top: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    /*font-family: 'Cabin', sans-serif;*/
	}
	.box2{
		border-radius: 20px;
		padding: 20px;
		background-color: #FFFFFF;
		/*font-family: 'Cabin', sans-serif;*/
		margin-left: 150px;
		margin-right: 150px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	.head{
		 color:#E1F6CE;
		 border-radius:10px;
		 padding-left:10px;
	}
	a:link{
		color: black;
	}


</style>

<h4><a href="que.php">My Question</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ans.php">My Answered </a></h4>
<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";
			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/><br/>
			$row[datetime]<br/><br/>
			</td></tr>";
			
			
			echo "</table></span><div class='h10'>	</div>";
		}
	
?>
<div class="footer">
  <h2>Footer</h2>
</div>

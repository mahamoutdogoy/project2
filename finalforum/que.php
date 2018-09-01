<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
	echo "<h4>My Question<img src='res/images/askq.jpg'  class='imagedel'/></h4>";
?>
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
<?php

$sql="SELECT * from question where user_id=$_SESSION[uid]";
$result=ExecuteQuery($sql);
	
		while($row = mysql_fetch_array($result))
		{
		
		echo "<span class='box2'>";
		echo "<span class='head'><a href='questionview.php?qid=$row[question_id]'><h4>$row[heading]</h4></a></span>";
		echo  "<br/>";
		echo $row['question_detail'];
		echo  "<br/>";
		
		echo $row['datetime'];
		echo "</span>";
		echo "<br><div></div>";
				

		}

?>
<?php require("footer.php")?>
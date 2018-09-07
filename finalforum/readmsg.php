<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<style type="text/css">
	body{
		background-image: url('images/xyz.jpg');
	}
	.marg{
		padding-right: 150px;
		padding-left: 150px;
	}
	.box2{
		border-radius: 20px;
		padding: 20px;
		background-color: #FFFFFF;
		/*font-family: 'Cabin', sans-serif;*/
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	.btn_send{
		border-radius: 15px;
		align-content: center;
		padding:5px 5px 5px 5px;
		width:100px;
		font-style: bold;
		font-family: 'Cabin', sans-serif;
	}
	.btn_send:hover{
		background-color: #85E86A;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
</style>
<div class="marg">
<a href="javascript:void()" onclick="history.back()">Back</a>
<hr>
<?php
	$rows = ExecuteQuery ("SELECT user_id_from, (select fullname from user where user_id=user_id_from) as fromname,  user_id_to, (select fullname from user where user_id=user_id_to) as toname FROM chatmaster where chat_id=$_GET[id]");
	
	$row = mysql_fetch_array ($rows);
	
	$fromid = $row["user_id_from"];
	$toid = $row["user_id_to"];
	$from = $row["fromname"];
	$to = $row["toname"];

	$sql = "SELECT * FROM chat WHERE chat_id=$_GET[id] ORDER BY cdatetime ASC";
	$rows = ExecuteQuery ($sql);


	while ($row = mysql_fetch_array($rows))
	{
		echo "<div class='box2'>";
		if ($row["user_id"] == $fromid)
			echo "<strong>$from</strong><br/><br/>";
		else
			echo "<strong>$to</strong><br/><br/>";
			
		echo "$row[message]";
		echo "</div><br>";
		//echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>
<script type="text/javascript">
	function check(f)
	{
		if(f.tt.value=="")
		{
			document.getElementById("a").innerHTML="Please,Enter the reply message";
			//alert("Please,Enter The Reply Message");
			f.tt.focus();
			return false;
			
			}
			else
			return true;
		}
</script>
<form action="writemsg.php" method="POST" onsubmit="return check(this)">
    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="chid" />
<table>

<tr><td></td><td></td><td><textarea rows="3" cols="30" name="tt" ></textarea><span id='a' style="color: red;"></span></td></tr>
<tr><td></td><td></td><td><input type="submit" value="SEND" class='btn_send' ></td></tr>
</table>
</form>
</div>
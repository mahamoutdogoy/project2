<?php session_start();
 require("header.php");
require("checkUser.php")?>
<script type="text/javascript">
	document.getElementById("amessage").className="active";
</script>

<style type="text/css">
	.mess{
		margin-left: 150px;
		margin-right: 150px;
		border-radius: 20px;
		padding: 20px;
		background-color: #FFFFFF;
		/*font-family: 'Cabin', sans-serif;*/
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	body{
		background-image: url('images/xyz.jpg');
	}
</style>
<div class="mess">
	<a href="search.php">Send New Message</a>
<hr/>
<div class='messbox'>
<?php
	//first fetch whom u have send chats
	
	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM Chatmaster, user WHERE chatmaster.user_id_to=user.user_id AND chatmaster.user_id_from=$_SESSION[uid] ";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[fullname]</a>";
		
		$chatrow = mysql_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]<br/>";
			echo "$chatrow[cdatetime]";
		}
		
				//echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
	
	
	// now fetch those that have sent chats to you
	
	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM Chatmaster, user WHERE chatmaster.user_id_from=user.user_id AND chatmaster.user_id_to=$_SESSION[uid]";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[fullname]</a>";
	
		
		$chatrow = mysql_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]<br/>";
			echo "$chatrow[cdatetime]";
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>
</div>
</div>
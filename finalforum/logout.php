<?php require("header.php");?>
<?php 
session_start();

ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");

session_destroy();
?>
<style type="text/css">
	body
	{
		background-image: url('images/bg2.jpg');
	}
</style>
<h1>Log out</h1>
<p>
	You have logged out.  <a href="index.php">Click Here</a> to login again.
</p>
<?php require("footer.php");?>
<?php require("header.php");?>
<?php 
session_start();

ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");

session_destroy();
?>
<style type="text/css">
	body
	{
		background-image: url('images/xyz.jpg');
		background-repeat: no-repeat;
		background-size: 200%;
	}
	.log{
    	border:1px solid #ccc;
    	padding: 20px;
    	text-align: center;
    	margin-right: 200px;
    	margin-left: 200px;
    	margin-top: 20px;
    	border-radius: 10px;
    	background: linear-gradient(to bottom, #ffcc66 0%, #ff9966 100%);
    	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
</style>
<div class='log'>
<h1>Signed Out Successfully</h1>
<p>
	You have signed out.  <a href="index.php">Click Here</a> to sign in again.
</p>
</div>
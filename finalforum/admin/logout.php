<?php require("header.php");?>
<?php 
session_start();
session_destroy();
?>
<style>
	body
	{
    background-image: url(yellow.jpg);

	}
</style>
<h1>log out</h1>
<p>
	You have logged out.  <a href="../index.php">Click here</a> to login again.
</p>

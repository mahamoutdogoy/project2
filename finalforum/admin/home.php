<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("ahome").className="active";
</script>
<style>
	
	body
	{
    background-image: url(yellow.jpg);

	}
</style>

<?php require("footer.php");?>
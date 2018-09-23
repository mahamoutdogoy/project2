<?php
echo "Thank you for registering with us!! You will be redirected in 6 seconds";
?>

<script type="text/javascript">
	function delayedRedirect(){
		window.location = "momlogin.php"
	}
</script>
</head>

<body onload="setTimeout('delayedRedirect()',5000)">
	
</body>
<?php 
	if(!isset($_SESSION["fn"]))
		header("location:index.php");
?>

<style>
.dropbtn {
	background: none;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    width: 100%;
    background-image: url('images/femaleicon.png');
    background-position: 100%; 
    background-size:auto;
    background-repeat: no-repeat;
    padding-left: 40px;
}

.dropdown {
    position: relative;
    display: inline-block;
    padding-right: 100px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    width: 100%;
    size: 20%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 10px;

}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
     padding-right: 30px;
}

.dropdown-content a:hover {
	background-color: #ddd;
	border-radius: 10px;
    
}

.dropdown:hover .dropdown-content {
    float: left;
    display: block;
}

.dropdown:hover .dropbtn {
	color: #3e8e41;
}
</style>
<span style="text-align:right ;width:100%; display:block; margin-bottom:5px;">
<div class="dropdown">
  <button class="dropbtn"><?php echo $_SESSION["fn"];?></button>
  <div class="dropdown-content">
   <center> <a href="uedit.php">Edit</a></center>
   <center> <a href="logout.php">Logout</a></center>
  </div>
</div>
</span> 
<!-- 
<span style="text-align:right ;width:90%; display:block; margin-bottom:5px;">
	<font color=white>Welcome <a href="uedit.php">&nbsp<img src="res/images/1.jpg" class="imagedel"/>&nbsp<?php echo $_SESSION["fn"];
	?></a>, [ <a href="logout.php">Logout</a> ]</font> 
</span> -->
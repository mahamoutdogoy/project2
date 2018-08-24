<?php require_once("utility.php"); 
ob_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Header</title>
    <script type="text/javascript" src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="res/style.css" type="text/css" media="screen" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>
<style>
    .nav{
/*    border:1px solid #ccc;*/
    border-width:1px 0;
    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
    font-color:#FFFFFF;
    object-position: fixed;
    font-size: 20px;
    font-style: arial;
}
.nav li{
    display:inline;
}
.nav a{
    display:inline-block;
    padding:10px;
}
.fa {
  float: right;
  padding: 20px;
  font-size: 18px;
  width: 18px;
  text-align: center;
  text-decoration: none;
  margin: 0px 1px;
  border-radius:50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
</style>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    
<ul class="nav">
    <li><a href="uhome.php" id="auhome">Home</a></li>
    <li><a href="aboutus.php" id="aaboutus">About</a></li> 
    <li><a href="forum.php" id="aforum">Forum</a></li>
    <li><a href="contact.php" id="acontact">Contact</a></li>
    <li><a href="messages.php" id="amessage">Message</a></li> 
    <li><a href="#" class="fa fa-facebook"></a></li>
    <li><a href="#" class="fa fa-twitter"></a></li>
    <li><a href="#" class="fa fa-google"></a></li>
    <li><a href="#" class="fa fa-linkedin"></a></li>
</ul>
    </div>
               <div class="art-contentLayout">
                    <div class="art-content">
                    </div>
                </div>
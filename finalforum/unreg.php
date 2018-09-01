<?php session_start();
 require("header.php")?>
 
 <head><link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet"></head>
 <style type="text/css">
 h2{
 	font-family: 'Cabin', sans-serif;	
 }
 .link a:link {
 font-weight: bold;
 text-decoration: none;
 font-family:"Arial";
 color: blue;
}
.link a:hover {
  font-family:"Tahoma";
color: red;
}
.link a:visited {
 font-weight: bold;
 text-decoration: underline;  
  font-family:"Impact";
  
}

 </style>
 <h2>You are  not registered user!!!!<br/></h2>
<h3> <a href="register.php" class="link">Please register</a>
 </h3>
 <?php require("footer.php")?>
<h4></h4>
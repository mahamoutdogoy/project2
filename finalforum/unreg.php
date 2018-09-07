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
body{
	background-image: url('images/xyz.jpg');
}
.unreg{
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
 <div class='unreg'>
 <h2>You are  not registered user!!!!<br/></h2>
<h3> <a href="register.php" class="link">Please register</a>
 </h3>
</div>
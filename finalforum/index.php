<?php require_once("utility.php");
require ("header.php"); 
ob_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
* {
    box-sizing: border-box;
    /*font-family: 'Cabin', sans-serif;*/
    font-family: 'Roboto', sans-serif;
}

body {
    font-family: 'Roboto', sans-serif;
    padding: 10px;
    background-image: url("images/xyz.jpg");
    /*background: linear-gradient(to bottom, #ffcc66 0%, #ff5050 100%);*/
    background-size: cover;
    background-repeat: no-repeat;
}

/* Header/Blog Title */
/*.header {
    padding: 1px;
    margin-top: 0px;
    border-radius: 20px;
    text-align: center;
    background: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
} 

.header h1 {
    font-size: 50px;
}
*/
/* Style the top navigation bar */
/*.topnav {
    overflow: hidden;
    background-color: white;
    border-radius: 10px;
    font-color:black;
    margin-top: 5px;
}
*/
/* Style the topnav links */
/*.topnav a {
    float: center;
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
*/
/* Change color on hover */
/*.topnav a:hover {
    background-color: #ddd;
    color: black;
}*/

.image_section {
    background-color: #ddd;
    color: black;
    width: 300px;
    margin-top: 20px;
    margin-bottom: 20px;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
/*    background-color: #f1f1f1;*/
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card_sign {
    background-color: #FAD87B;
    border:1px solid #ccc;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px;
    margin-top: 20px;
    border-radius: 10px;
    background: linear-gradient(to bottom, #ffcc66 0%, #ff9966 100%);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card_slides {
    background-color: #FBEABA;
    /*background-image: url(images/cardbg.jpg);*/
    padding: 20px;
    border:1px solid #ccc;
    margin-top: 20px;
    border-radius: 10px;
    width: auto;
    background: linear-gradient(to bottom, #ffcc66 0%, #ff9966 100%);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card_others {
    background-color: #F79869;
    padding: 20px;
    border:1px solid #ccc;
    margin-top: 20px;
    border-radius: 10px;
    background: linear-gradient(to bottom, #ffcc66 0%, #ff9966 100%);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 10px;
    text-align: center;
    background: #ddd;	
    margin-top: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}
.mySlides{
  border-radius: 20px;
  width:100%;
}

.textbox{
	border-radius: 15px;
	width:100%;
	padding: 10px;

}
.btn_login,.btn_signup{
	border-radius: 15px;
	padding:5px 5px 5px 5px;
	width:100px;
	font-style: bold;
	font-family: 'Cabin', sans-serif;
}
.btn_login:hover,.btn_signup:hover{
	background-color: #85E86A;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
input[type=text] {
    background-color: white;
    background-image: url('images/usericon.png');
    background-position: 10px 10px;
    background-size: 7%; 
    background-repeat: no-repeat;
    padding-left: 40px;
}
input[type=password] {
    background-color: white;
    background-image: url('images/passicon1.png');
    background-position: 10px 10px; 
    background-size: 7%;
    background-repeat: no-repeat;
    padding-left: 40px;
}
</style>
</head>
<body>

<!-- <div class="header">
  <h1>Single Mom Forum</h1>
  <p>Resize the browser window to see the effect.</p>
</div> -->

<!-- <div class="topnav">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Forum</a>
  <a href="#">Contact</a>
  <a href="#">Signin</a>
  <a href="#" style="float:right"></a>
</div> -->

<div class="row">
  <div class="leftcolumn">
    <div class="card_slides">
      <!-- <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
      <div class="for_slides" style="max-width:auto">
        <center>
          <img class="mySlides" src="images/mom1.jpg">
          <img class="mySlides" src="imagess/11.jpg">
          <img class="mySlides" src="images/mom3.jpg">
          <img class="mySlides" src="images/mom4.jpg">
        </center>
      </div>
      <!-- script for slide show above-->
      <script>
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 5000); // Change image every 2 seconds
        }
      </script>


    </div>
    <!-- <div class="card">
      <h2>Contact Us</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div> -->
  </div>
  <div class="rightcolumn">
    <div class="card_sign">
      <center>
      <h2 id="signin">Sign In/Sign Up</h2>
      <!-- <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p> -->
      <form action="loginH.php" method="POST" onsubmit="return check(this)" class="login">
          <input type="text" name="uid" placeholder="Username" class="textbox"><span id='spuid' class="name" style="color: red;"></span><br>
          <br>
          <input type="password" name="pwd" placeholder="Password" class="textbox"><span id='sppwd' class="password" style="color: red;"></span><br>
          <br>
          <input type="submit" name="login" value="Login" class="btn_login">&nbsp<input type="button" name="signup" value="Signup" class="btn_signup" onclick="location.href='register.php';">
      </form>
      <script type="text/javascript">
			function check(f)
			{
				if(f.uid.value=="")	
				{
					document.getElementById("spuid").innerHTML="Please,Enter the user id ";
					//alert("Please,Enter Your User Id")
					f.uid.focus()
					return false;
				}
				if(f.pwd.value=="")
				{
					document.getElementById("sppwd").innerHTML="Please,Enter the password";
					//alert("Please,Enter Your Password")
					f.pwd.focus()
					return false;
				}			
				else
					return true;
			}								
	  </script>
	  <?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid Credentials";
	  ?>
      </center>
    </div>
    <!-- <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div> -->
    <div class="card_others">
      <h3>What we do...</h3>
      	<!-- <div class="w3-content w3-section" style="max-width:1000px">
        <center>
          <img class="doslides" src="images/advertising.jpg" style="width:100%">
          <img class="doslides" src="images/jobpost.jpg" style="width:100%">
          <img class="doslides" src="images/forum2.jpg" style="width:100%">
        </center>
        <script>
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("doslides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 5000); // Change image every 2 seconds
        }
      </script>
      </div> -->
      <img class="doslides" src="images/openforum.gif" style="width:100%">
    </div>
  </div>
</div>

<!-- <div class="footer">
  <h2>Footer</h2>
</div> -->

</body>
</html>
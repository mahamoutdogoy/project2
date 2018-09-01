<?php require("header.php");?>
<head>
	<title>
		Login
	</title>
</head>

	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  padding-left: 50px;
  padding-right: 50px;
		background-image: url('4.jpg');
		width: auto;
		height: auto;	
		/*background:linear-gradient(to right,lightblue,white,lightblue);*/
		background-repeat: no-repeat;
		background-size: cover;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 6px;
  border: 1px;
  border-radius: 15px;
  margin: 1px 0px;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
table
{
	background-color: #FC7D62;
	border-radius: 20px;
	padding:20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
h3{
	font-family: 'Cabin', sans-serif;
}


</style>

<script type="text/javascript">
	function check(f)
	{
		if (f.uid.value == "")
		{
			//alert("Please, enter user id");
			document.getElementById("spuid").innerHTML = "Please, Enter user id.";
			
			f.uid.focus();
			return false;
		}
		else if (f.pwd.value == "")
		{
//			alert ("Please, enter password");
document.getElementById("a").innerHTML = "Please,Enter the password";
			
			f.pwd.focus();
			return false;
		}
		else
			return true;
	}
</script>
<center><h3>Login</h3></center>
 <center><form action="loginH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>user_id</td><td>:</td><td><input type="text" name="uid"><span id = "spuid" style = "color :red;"></span></td></tr>
<tr><td>password</td><td>:</td><td><input type="password" name="pwd"><span id = "a" style = "color :red;"></span></td></tr>
<tr><td><input type="submit" value="login" class="button"></td><td></td><td><input type="reset" value="cancel" class=button></td></tr>
<tr><td>Not a Member? <a href="register.php"> Register</a></td></tr>
</table>
<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Please Enter valid Username and Password";
				
?>

</form> 
</center>

<!-- <style type="text/css">
	table{
		opacity: 0.7;
		padding: 50px;
		padding-top: 15px;
		border-radius: 25px;
		font-size: 20px;
		background-color: #B5B5B5
		/*box-shadow:1px 12px 15px 2px;*/
		/*background:linear-gradient(to right,lightblue,white	,lightblue);*/
	}
	input{
		border-radius: 13px;
		padding:10px;
		height: 25px;
		font-size: 20px;
		width: auto;
	}
	body{
		/*background-image: url('single moms/mom1.jpg');*/
		background-image: url('4.jpg');
		width: auto;
		height: auto;	
		/*background:linear-gradient(to right,lightblue,white,lightblue);*/
		background-repeat: no-repeat;
		background-size: cover;
	}
	textarea{
		border-radius: 13px;
		padding-top: 5px;
		padding-left: 2px;
		padding-right: 2px;
		padding-bottom: 20px;
	}
	.button{
		width:200px;
		height: 40px;
		padding:none;
		text-align: center;
		display: inline-block;
	}
	.text
	{
		width: 300px;
	}
	.img
	{
		width: 300px;
		height: 40px;
	}
	.reg{
		font-color:#05232e;
	}
</style> 
 <table align="center">
	<tr>
		<td>
			<center><h1>Login</h1></center>
		</td>
	</tr>
	<tr>
		<td>
			<form action="loginH.php" method="POST" onsubmit="return check(this)">
				<input type="text" name="uid" placeholder="User ID"><br>
				<br>
				<input type="password" name="pwd" placeholder="Password"><br>
				<br>
				<center><input type="submit" value="login" class="button"><br>  
				<br><input type="reset" value="cancel" class="button"></center>
			<?php
			/*if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Please Enter valid Username and Password";
				*/
			?>
</form>
		</td>
	</tr>
	<br>
	<tr>
		<td>
			<center><font size="2px">Not a member?<a href="register.php">Register!</a></font></center>
		</td>
	</tr> 
</table> 

<body>

<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
        	<input type="text" name="uid" placeholder="User ID"><br>
			<br>
			<input type="password" name="pwd" placeholder="Password"><br>
			<br>
        	<center><input type="submit" value="login" class="button"><br>  
			<br><input type="reset" value="cancel" class="button"></center>
			<?php
	/*		if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Please Enter valid Username and Password";
				*/
			?>
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>

</body>
<br>  -->
<!-- <!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display:block;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>
<table>
	<form action="loginH.php" method="POST"  onsubmit="return check(this) style="border:1px solid #ccc">
  <div class="container">
    <h1>Login</h1>
    <p>Please fill in this form to Login to your Account.</p>
    <hr>

    <label for="user_id"><b>User ID</b></label>
    <input type="text" placeholder="Ente User ID" name="uid" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

  <!--   <div class="clearfix">
      <button type="reset" class="cancelbtn" value="cancel">Cancel</button>
      <button type="submit" class="signupbtn" value="login">Login</button>
    </div>
  </div>
  <?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Please Enter valid Username and Password";
				
?>
</form>
</table>


</body>
</html> -->
 -->
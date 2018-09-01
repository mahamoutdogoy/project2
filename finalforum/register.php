<?php  require("header.php"); ?>
<script type="text/javascript">
	function check(form1)
	{
		if(
		form1.u_name.value == "" ||
		form1.f_name.value == "" ||
		form1.pwd.value == "" ||
		form1.e_mail.value == ""||
		form1.gender.value == ""||
		form1.dob.value == ""||
		form1.add.value == ""||
		form1.sta.value == "" ||
		form1.cou.value == "" )
		{
		
			if (form1.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
				//alert("Please, Enter The Username");
			form1.u_name.form1.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				//alert("Please, Enter The Username");
				form1.u_name.focus();
				
			}
			 if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
			}
			 if (form1.pwd.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter password.";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();

			}
			
			 if (form1.e_mail.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
				
			}
			else
			{
				document.getElementById("d").innerHTML = "";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
			}
			 if (form1.gender.value == "")
			{
				document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
				
			}else
			{
				document.getElementById("spuid").innerHTML = "";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
			}
			 if (form1.dob.value == "")
			{
				document.getElementById("e").innerHTML = "Please, Enter date of birth.";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();
				
			}
			else
			{
				document.getElementById("e").innerHTML = "";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();

			}
			 if (form1.add.value == "")
			{
				document.getElementById("f").innerHTML = "Please, Enter address.";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
				
			}
			else
			{
				document.getElementById("f").innerHTML = "";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
			}
			 if (form1.sta.value == "")
			{
				document.getElementById("g").innerHTML = "Please, Enter state.";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();
				
			}
			else
			{
				document.getElementById("g").innerHTML = "";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();

			}
			 if (form1.cou.value == "")
			{
				document.getElementById("h").innerHTML = "Please, Enter country.";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
				
			}
			else
			{
				document.getElementById("h").innerHTML = "";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
			}
			return false;
		}
		else
			return true;
	}
</script>
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

 -->


<!-- <center><h1>Register User</h1></center>
<form action="registerH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<table align="center">
<tr><td>Username</td><td>:</td><td><input type="text" name="u_name" ><span id='a' style="color: red;"></span></td></tr>

<tr><td>Fullname</td><td>:</td><td><input type="text" name="f_name"><span id='b' style="color: red;"></span></td></tr>

<tr><td>Password</td><td>:</td><td><input type="password" name="pwd"><span id='c' style="color: red;"></span></td></tr>

<tr><td>E_Mail</td><td>:</td><td><input type="text" name="e_mail"><span id='d' style="color: red;"></span></td></tr>

<tr><td>Date Of Birth</td><td>:</td><td><input type="text" name="dob" ><span id='e' style="color: red;"></span></td></tr>

<tr><td>Image</td><td>:</td><td><input type="file" name="ima"></td></tr>

<tr><td>Address</td><td>:</td><td><textarea rows="3" cols="15" name="add"></textarea><span id='f' style="color: red;"></span></td></tr>

<tr><td>State</td><td>:</td><td><input type="text" name="sta"><span id='g' style="color: red;"></span></td></tr>

<tr><td>Country</td><td>:</td><td><input type="text" name="cou"><span id='h' style="color: red;"></span></td></tr>

<tr><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form> -->
<head><link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet"></head>
<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Raleway);
div.container{
    width: 960px;
    height: 610px;
    margin:50px auto;
}
*{
	font-family: 'Cabin', sans-serif;
}
div.main{
    width: 308px;
    margin-top: 35px;
    float:left;
    border-radius: 5px;
    border:2px solid #999900;
    padding:0px 50px 20px;
    font-family: 'Cabin', sans-serif;
}
#error{
    display:block;
    margin-top: 10px;
    margin-bottom: 10px;
}
#success{
    color:green;
    font-weight:bold;
}
span{
    color:red;
}

h2{
    background-color: #FEFFED;
    padding: 32px;
    margin: 0 -50px;
    text-align: center;
    border-radius: 5px 5px 0 0;
}
b{
    font-size:18px;
    display: block;
    color: #555;
}
hr{
    margin: 0 -50px;
    border: 0;
    border-bottom: 1px solid #ccc;
    margin-bottom:25px;
}
label{
    color: #464646;
    font-size: 14px;
    font-weight: bold;
}
input[type=text],
input[type=password],
input[type=number],
input[type=email]{
    width:96%;
    height:25px;
    padding:5px;
    margin-top:5px;
    margin-bottom:15px;
    font-family: 'Cabin', sans-serif;
}

select{
    margin-bottom: 15px;
    margin-top: 5px;
    width: 100%;
    height: 35px;
    font-size: 16px;
    font-family: cursive;
    font-family: 'Cabin', sans-serif;
}

input[type=submit]:hover,
input[type=reset]:hover
{
    background: linear-gradient(#48F180 5%, #48F180 100%);
}
table{
	background-color: #80deea;
	border-radius: 20px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	padding: 20px;
}
body{
	background-image: url("images/mom4.jpg");
	background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;
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
.textbox{
	border-radius: 15px;
	width:100%;
	padding: 10px;
}
</style>
<body>
<table align="center">
	<!-- <tr>
		<td>
			<center><h1 class="reg">Register User</h1></center>
		</td>
	</tr> -->
	<tr>
		<td>
			<form action="registerH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
				<input type="text" name="u_name" placeholder="Username" class="textbox" id="a" required><br>
				<input type="text" name="f_name" placeholder="Fullname" class="textbox"id="b" required><br>
				<input type="password" name="pwd" placeholder="Password" class="textbox" id="c" required><br>
				<input type="email" name="e_mail" placeholder="E-mail" class="textbox" id="d" required><br>
				<input type="date" name="dob" placeholder="Date of Birth" class="textbox" id="e" required><br>
				<br>
				<textarea rows="2" cols="30" name="add" placeholder="Address" class="textbox" id="f" required></textarea><br>
				<input type="text" name="sta" placeholder="State" class="textbox" id="g" required><br>
				<input type="text" name="cou" placeholder="Country" class="textbox" id="h" required><br>
				<font size="12"><input type="file" name="ima" placeholder="Image" class="img" ></font><br>
				<br><center><input type="submit" value="Submit" class="btn_login">&nbsp &nbsp<input type="reset" value="Reset" class="btn_signup"></center>
			</form>
		</td>
	</tr>
	<br>
	<tr>
		<td>
			<center><font size="2px">Already a member?<a href="login.php">Sign in!</a></font></center>
		</td>
	</tr> 
</table>
</body>
<!-- <?php require("footer.php"); ?> -->
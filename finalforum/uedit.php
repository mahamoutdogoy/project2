<?php session_start();
 require("header.php");
require("checkUser.php")?>
<script type="text/javascript">
function check(f)
	{
		if (f.un.value == "")
		{
			document.getElementById("a").innerHTML="Please,Enter the username";
			//alert("Please, Enter The Username");
			f.un.focus();
			return false;
		}
		else if (f.fn.value == "")
		{
			document.getElementById("b").innerHTML="Please,Enter the fullname";
//			alert ("Please,Please Enter The Fullname");
			f.fn.focus();
			return false;
		}
		else if (f.pwd.value == "")
		{
			document.getElementById("c").innerHTML="Please,Enter the password";
			//alert ("Please,Please Enter The Password");
			f.pwd.focus();
			return false;
		}
		else if (f.e_mail.value == "")
		{
			document.getElementById("d").innerHTML="Please,Enter the e-mail add ";
			//alert ("Please,Please Enter The E-mail Address");
			f.e_mail.focus();
			return false;
		}
		else if (f.gender.value == "")
		{
			document.getElementById("e").innerHTML="Please,Select the gender";
			//alert("Please,Please Enter The Gender");
			f.gender.focus();
			return false;
		}
		else if (f.dob.value == "")
		{
			document.getElementById("f").innerHTML="Please,Enter the date of birth"
	//		alert ("Please,Please Enter The Date Of Birth");
			f.dob.focus();
			return false;
		}
		else if (f.add.value == "")
		{
			document.getElementById("i").innerHTML="Please,Enter the address";
			//alert ("Please,Please Enter The Address");
			f.add.focus();
			return false;
		}
		else if (f.sta.value == "")
		{
			document.getElementById("j").innerHTML="Please,Enter the state";
			//alert ("Please,Please Enter The State");
			f.sta.focus();
			return false;
		}
		else if (f.cou.value == "")
		{
			document.getElementById("k").innerHTML="Please,Enter the country";
//			alert ("Please,Please Enter The Country");
			f.cou.focus();
			return false;
		}
		
		else
			return true;
	}
</script>
<style type="text/css">
	.txt{
		border-radius: 20px;
		padding:5px;
	}
	.table
	{
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
	body{
		background: linear-gradient(to bottom, #ffcc66 0%, #ff9966 100%);
		background-image: url('images/xyz.jpg');
		background-size: cover;
		background-repeat: no-repeat;
	}
	.btn_update,.btn_reset{
		border-radius: 15px;
		align-content: center;
		padding:5px 5px 5px 5px;
		width:100px;
		font-style: bold;
		font-family: 'Cabin', sans-serif;
	}
	.btn_reset:hover,.btn_update:hover{
		background-color: #85E86A;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}	
	.datar{
		padding-left: 100px;
		padding-top: 20px;
	}
	.datal
	{
		padding-top: 20px;
	}
</style>
<center>
<body>
<form action="uupdate.php" method="POST" onsubmit="return check(this)" enctype="multipart/form-data">

<?php
$sql="SELECT * from user where user_id=$_SESSION[uid]";
 
	$rows = ExecuteQuery($sql);
	
	if (mysql_num_rows($rows)>0)
	{
		$row = mysql_fetch_array ($rows);
		echo "<table class='table'>";
		echo "<tr><td>User Name</td><td> : </td><td><input type='text' name='un' value='$row[username]' class='txt' ><span id='a' style='color: red';/></span></td></tr>";
		echo "<tr><td>Full Name</td><td> : </td><td><input type='text' name='fn' value='$row[fullname]' class='txt'><span id='b' style='color: red';/></span></td></tr>";
		echo "<tr><td>Password</td> <td> : </td><td><input type='password' name='pwd' value='$row[password]'class='txt'><span id='c' style='color: red';/></span></td></tr>";
		echo "<tr><td>E-Mail</td><td> :</td><td> <input type='text' name='e_mail' value='$row[e_mail]'class='txt'/><span id='d' style='color: red';/></span></td></tr>";
		echo "<tr><td>Gender</td><td> :</td><td> <input type='radio' name='gender' value='1' checked='checked' class='txt' />male<input type='radio' name='gender' >female<span id='e' style='color: red';/></span></td></tr> ";
		echo "<tr><td>Date Of Birth</td> <td>: </td><td><input type='text' name='dob' value='$row[dob]'class='txt'/><span id='f' style='color: red';/></span></td></tr>";
		echo "<tr><td>Image</td><td>:</td><td> <input type='file' name='ima' value=''/></td></tr> ";
		echo "<tr><td>Address</td><td> :</td><td> <textarea rows='3' cols='15' name='add' value='$row[address]'class='txt'></textarea><span id='i' style='color: red';/></span></td></tr>";
		echo "<tr><td>State</td><td> :</td><td> <input type='text' name='sta' value='$row[state]'class='txt'><span id='j' style='color: red';/></span></td></tr>";
		echo "<tr><td>Country</td><td> :</td><td><input type='text' name='cou' value='$row[country]'class='txt's><span id='k' style='color: red';/></span></td></tr>";
		echo "<center><tr><td class='datar'><input type='submit' value='Update' class='btn_update'></td><td> </td><td class='datar'><input type='reset' value='Reset' class='btn_reset'></td></tr></center>";
		echo "</table>";	
	}
	
?>

</form>
</center>
</body>
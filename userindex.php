

<?php
session_start();
$conn=mysqli_connect('localhost','root','','multi');

if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($username)&&empty($password)){
  $error= 'Fields are Mandatory';
  }else{

 $result=mysqli_query($conn,"SELECT*FROM user WHERE username='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
      $_SESSION['user']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'role'=>$row['role']
   );
   $role=$_SESSION['user']['role'];
   // navi base one their roles
    switch($role){
  case 'user':
  header('location:user.php');
  break;
  case 'manager':
  header('location:manager.php');
  break;
  case 'admin':
  header('location:admin.php');
  break;
 }
 }else{
 $error='Your PassWord or UserName is not Found';
 }
}
}
?>
<html>
<head>
<style>
  
body
 {
  font-family: Arial, Helvetica, sans-serif;
 /* background-image: url(11.jpg);*/
  background-size: cover;

}
/** {
  box-sizing: border-box
}*/

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
    width: 50%;
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
  float: center;
  border-radius: 20px;
  width: 50%;
}

/* Add padding to container elements */
.container {
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
/*@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}*/
form{
  padding: 16px;
  width: 55%;
  border-radius: 35px;
/*  background-color: rgb(114, 181, 204);*/
}
.form{
  padding-left: 300px;
  padding-right: 300px;
  padding-top: 50px;
}
.txtbox{
  width: 400px;
}
</style>
</head>
<body>
<div align="center" padding="200px">

<!-- <form method="POST" action="">
<table>
   <tr>
     <td>UserName:</td>
  <td><input type="text" name="username"/></td>
   </tr>
   <tr>
     <td>PassWord:</td>
  <td><input type="text" name="password"/></td>
   </tr>
   <tr>
     <td></td>
  <td><input type="submit" name="login" value="Login"/></td>
   </tr>
</table>
</form> -->
<div class="form">
  <form method="POST"  style="border:1px solid #ccc">
  <div class="container">
    <h1>Login</h1>
    <p>Please fill in this form to Login</p>
    <hr>

    <label for="username"><font size="5px"><b>Username</b></font></label>
    <div class="txtbox">
    <input type="text" placeholder="Enter Username" name="username"required></div>

    <label for="password"><font size="5px"><b>Password</b></font></label>
    <div class="txtbox">
    <input type="password" placeholder="Enter Password" name="password" required></div>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
<!--     
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
 -->
   <div class="clearfix">
      <button type="submit" class="signupbtn" name="login" value="Login">Login</button>
      <button type="reset" class="cancelbtn" name="cancel" value="Cancel">Cancel</button>
    </div>    
  </div>
</form>
</div>

<?php if(isset($error)){ echo $error; }?>
</div>
</body>
</html>
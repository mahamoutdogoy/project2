

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


}
form
{
  padding-top: 250px;

}



</style>
</head>
<div align="center">

<form method="POST" action="">
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
</form>
<?php if(isset($error)){ echo $error; }?>
</div>
</html>
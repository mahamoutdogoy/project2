<?php
  $username  = $_GET['q']; 
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Job Search</title>
   <center><h1>JOB SEARCH PORTAL</h1></center>
   <style>
      body
{
       background-image:url("yellow.jpg");
    
      background-size: cover;
        margin-left: 10%;
   }  
      
table
    {
      background-color:#BAC8DF;
      border-radius:20px;
      border:1px solid;
    }
    .table
    {
      background-color:white;
      border-radius:20px;
      font-color:white;
      
      opacity:0.8;
      text-align: center;
    }
    form{
      text-align:justify;
      font-size:20px;
    }
    input
    {
        border-radius: 17px;
      border-radius: 17px;
      border-radius: 17px;
      border-radius: 17px;
        border:solid 1px;
        padding:10px;
    }
    .text
    {
      width:200px;
    }
    .button 
    {
        background-color: white;
        border:2px solid #484646;
        width:200px;
        color: black;
        padding: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .button:hover
    {
      background-color: #392F2F;
        color: white;
    }
    .submit
    {
      width: 95px;
    }
    .box
    {
      width: 295px;
    }
        .change
    {
      width: 130px;
    }
    h1
    {
        text-align: center;
    }
   </style>
</head>
<body>

<div id='cssmenu'>

 <br><br><br>

 <form action="" method="POST">
  <input list="jtype" name="jtype" placeholder="Job Type" class="list">
          <datalist id="jtype">
            <option value="Full-Time"></option>
            <option value="Part-Time"></option>
            <option value="Work from home"></option>
            <option value="Internship"></option>
            <option value="Temporary"></option>
            <option value="Volunteer"></option>
            <option value="Commission based"></option>
            <option value="Contract"></option>
          </datalist>&nbsp&nbsp&nbsp
  <input list="jfield" name="jfield" placeholder="Job field" class="list">
          <datalist id="jfield">
            <option value="Freelancing"></option>
            <option value="computer and Technology"></option>
            <option value="Sales"></option>
            <option value="Infant care taking"></option>
            <option value="Teacher"></option>
            <option value="Healthcare professional"></option>
            <option value="Marketing"></option>
            <option value="Management"></option>
            <option value="Other"></option>
          </datalist>&nbsp&nbsp&nbsp
  <input type="number" name="salary" placeholder="Salary">&nbsp&nbsp&nbsp
  <input type="text" name="location" placeholder="Prefered Location"><br><br>
  <input type="submit" name="Submit" value="Search">
  <table border="1" class="table">
          <tr>
            <th>Job ID</th>
            <th>Job Desciption</th>
            <th>Company Name</th>
            <th>Job Type</th>
            <th>Location</th>
            <th>Education</th>
            <th>Experience</th>
            <th>Salary</th>
            <th>Salary Type</th>
            <th>Last Date to apply</th>           
            <th>Action</th>
          </tr> 
  <tr><br><br><br>
  <?php
    require('db.php');
    if(isset($_POST['jtype'])){
    $jtype = $_POST['jtype'];
    $jfield = $_POST['jfield'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];
    
    if(isset($_POST['Submit'])){
      
      $query = "SELECT gstartd.jid, gstartd.cname, gstartd.location, jobdetails.jsalary, jobdetails.jtype, jobdetails.jfield, jobdetails.jsalarytype, jobdetails.jdesc, appdetails.education, appdetails.experience, appdetails.jduedate FROM  gstartd INNER JOIN jobdetails ON gstartd.jid=jobdetails.jid INNER JOIN appdetails  ON gstartd.jid=appdetails.jid WHERE DATE(appdetails.jduedate) >= CURDATE() AND (jobdetails.jtype = '$jtype' OR jobdetails.jfield = '$jfield' OR gstartd.location ='$location' OR jobdetails.jsalary >='$salary')";
       
      $result = $con->query($query);
      
      while($rows3 = mysqli_fetch_array($result)){
              $jid = $rows3['jid'];
              $cname = $rows3['cname']; 
              $location = $rows3['location'];
              $jsalary = $rows3['jsalary'];
              $jsalarytype = $rows3['jsalarytype'];
              $jtype = $rows3['jtype'];
              $jfield = $rows3['jfield'];
              $jdesc = $rows3['jdesc'];
              $education = $rows3['education'];
              $experience = $rows3['experience'];
              $jduedate = $rows3['jduedate'];
              
              // $query3 = "INSERT INTO scholars (usern,amount) VALUES ('$username','$scholarshipamnt')";
              // $result2 = $con->query($query3);
              ?>
              <tr>
              <td><?php echo $jid; ?></td>
              <td><?php echo $jdesc; ?></td>
              <td><?php echo $cname; ?></td>
              <td><?php echo $jtype; ?></td>
              <td><?php echo $location; ?></td>
              <td><?php echo $education; ?></td>
              <td><?php echo $experience; ?></td>
              <td><?php echo $jsalary; ?></td>
              <td><?php echo $jsalarytype; ?></td>
              <td><?php echo $jduedate; ?></td>
              <form method="POST">
                        <td><input type="submit" name="apply" value="Apply"  /></td>
                        <input type="hidden" name="id" value="<?php echo $rows3['jid']; ?>"/>
                        </form>
              </tr>

              <?php
              }
            }
               }
          ?>
          </tr>
        </table>
        <br><br>
  </form>
</body>
</html>
<?php
  if (isset($_POST['apply'])) {
     $id = $_POST['id'];
     $date = date('Y-m-d H:i:s');

     $query3 = "INSERT INTO `applied` (jid,username,status,apply) VALUES ('$id','$username','applied','$date') ";
     $result3 = $con->query($query3);
     if ($result3) {
      echo "applied sucessfully";
      //header("Refresh: 5; url=vjob.php?q=$usern");
      }
      else
      {
        echo "<script type='text/javascript'>alert('You have already applied for the job!')</script>";  
      }
      
     }
?>